<?php

namespace App\Services;

use DB;
use Exception;
use ReflectionClass;

class LessonService
{
    protected $data;
    protected $lesson;

    protected function make($lesson)
    {
        $lesson = 'App\Lesson\\' . ucfirst($lesson);

        if (! class_exists($lesson)) {
            throw new Exception('Lesson does not exist');
        }

        return new $lesson;
    }

    public function example($lesson, $exhibit)
    {
        $lesson = $this->make($lesson);
        return [
            'code' => $this->getMethodContent($lesson, $exhibit),
            'data' => $this->captureQueriesAndData($lesson, $exhibit),
            // ^captureQueriesAndData populates $this->data.
            'sql' => collect(DB::getQueryLog()),
        ];
    }

    protected function captureQueriesAndData($lesson, $exhibit)
    {
        DB::enableQueryLog();
        try {
            $data = $lesson->$exhibit();
        } finally {
            DB::disableQueryLog();
        }
        return $data;
    }

    protected function getMethodContent($lesson, $exhibit)
    {
        $reflection = new ReflectionClass($lesson);
        $method = $reflection->getMethod($exhibit);
        $start_line = $method->getStartLine() + 1;
        $end_line = $method->getEndLine() - 1;
        $length = $end_line - $start_line;

        $source = file($method->getFileName());
        return implode("", array_slice($source, $start_line, $length));
    }
}
