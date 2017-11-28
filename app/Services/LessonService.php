<?php

namespace App\Services;

use DB;
use ReflectionClass;
use App\Exceptions\LessonNotFoundException;

class LessonService
{
    protected $data;
    protected $lesson;

    protected function make($lesson)
    {
        $lesson = 'App\Lesson\\' . ucfirst($lesson);

        if (! class_exists($lesson)) {
            throw new LessonNotFoundException;
        }

        return new $lesson;
    }

    public function example($lesson, $exhibit)
    {
        $lesson = $this->make($lesson);
        return new LessonSample(
            $this->getMethodContent($lesson, $exhibit),
            $this->captureQueriesAndData($lesson, $exhibit),
            // ^captureQueriesAndData needs to be called before DB::getQueryLog().
            collect(DB::getQueryLog())
        );
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
