<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson\LessonFactory;
use App\Services\LessonService;

class LessonController extends Controller
{
    protected $lesson;

    function __construct(LessonService $lesson)
    {
        $this->lesson = $lesson;
    }

    public function show($lesson, $exhibit)
    {
        return view('example', [
            'sample' => $this->lesson->example($lesson, $exhibit)
        ]);
    }
}
