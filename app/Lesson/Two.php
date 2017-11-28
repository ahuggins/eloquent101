<?php

namespace App\Lesson;

use App\Film;

class Two
{
    public function retrieveFirstRecord()
    {
        return Film::first();
    }

    public function accessDataAsAProperty()
    {
        // Extremely simplified example that you would never do really.
        $film = Film::first();
        return $film->title;
    }

    public function createdAtReturnsCarbon()
    {
        $film = Film::first();
        return $film->created_at;
    }

    public function formatCarbon()
    {
        $film = Film::first();
        return $film->created_at->format('Y-m-d');
    }
}
