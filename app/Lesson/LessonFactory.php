<?php

namespace App\Lesson;

class LessonFactory
{
    public static function get($lesson)
    {
        $lesson = 'App\Lesson\\'.ucfirst($lesson);
        return new $lesson;
    }
}
