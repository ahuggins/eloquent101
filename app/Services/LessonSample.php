<?php

namespace App\Services;

class LessonSample
{
    public $code;
    public $data;
    public $sql;

    function __construct($code, $data, $sql)
    {
        $this->code = $code;
        $this->data = $data;
        $this->sql = $sql;
    }
}
