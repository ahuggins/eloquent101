<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson\LessonFactory;

class ExamplesController extends Controller
{
    public function show($lesson, $exhibit)
    {
        return LessonFactory::get($lesson)->render($exhibit);
    }
}
