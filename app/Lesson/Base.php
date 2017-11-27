<?php

namespace App\Lesson;

class Base
{
    public function render($exhibit)
    {
        $code = $this->getMethodContent($exhibit);
        $data = $this->$exhibit();
        return view('lesson', [
            'code' => $code,
            'data' => $data
        ]);
    }

    public function getMethodContent($exhibit)
    {
        $func = new \ReflectionClass(get_class($this));
        $func = $func->getMethod($exhibit);
        $filename = $func->getFileName();
        $start_line = $func->getStartLine() + 1;
        $end_line = $func->getEndLine() - 1;
        $length = $end_line - $start_line;

        $source = file($filename);
        return implode("", array_slice($source, $start_line, $length));
    }
}
