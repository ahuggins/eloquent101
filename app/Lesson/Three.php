<?php

namespace App\Lesson;

class Three extends Base
{
    public function returnAllData()
    {
        return Film::all();
    }

    public function limitNumberOfRecords()
    {
        return Film::limit(10)->get();
    }
}
