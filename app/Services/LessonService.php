<?php

namespace App\Services;

use DB;
use Exception;
use ReflectionClass;

class LessonService
{
    protected $code;
    protected $data;
    protected $lesson;

    public function make($lesson)
    {
        $lesson = 'App\Lesson\\' . ucfirst($lesson);

        if (! class_exists($lesson)) {
            throw new Exception('Lesson does not exist');
        }

        $this->lesson = new $lesson;
    }

    public function example($lesson, $exhibit)
    {
        $this->make($lesson);
        return view('lesson', [
            'sql' => $this->captureQueriesAndGetData($exhibit),
            // ^captureQueriesAndGetData makes $this->code and $this->data available.
            'code' => $this->code,
            'data' => $this->data,
        ]);
    }

    public function captureQueriesAndGetData($exhibit)
    {
        DB::enableQueryLog();
        try {
            $this->code = $this->getMethodContent($exhibit);
            $this->data = $this->lesson->$exhibit();
        } finally {
            DB::disableQueryLog();
        }
        return collect(DB::getQueryLog());
    }

    public function getMethodContent($exhibit)
    {
        $reflection = new ReflectionClass($this->lesson);
        $method = $reflection->getMethod($exhibit);
        $start_line = $method->getStartLine() + 1;
        $end_line = $method->getEndLine() - 1;
        $length = $end_line - $start_line;

        $source = file($method->getFileName());
        return implode("", array_slice($source, $start_line, $length));
    }
}
