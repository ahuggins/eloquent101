<?php

namespace App\Exceptions;

use Exception;

class LessonNotFoundException extends Exception
{
    protected $message = 'Lesson was not found.';
}
