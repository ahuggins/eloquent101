<?php

namespace App\Lesson;

use App\Film;

class Three
{
    public function returnAllData()
    {
        return Film::all();
        // Notice that the Var Dumper truncates the objects after a few...
        // You surely don't need to inspect every object.
    }

    public function limitNumberOfRecords()
    {
        return Film::limit(10)->get();
    }

    public function relationship()
    {
        $film = Film::first();
        return $film->text;
    }

    public function relationship2()
    {
        $films = Film::limit(10)->get();
        // This is calling ->each on the above returned Collection,
        // this is to show how you might use this in a view, and how it creates a query for each ->text call
        return $films->each(function ($film) {
            return $film->text;
        });
    }

    public function relationship3()
    {
        // Highlights Eager loading and reducing queries
        $films = Film::with('text')->limit(10)->get();
        // This is calling ->each on the above returned collection,
        // this is to show how you might use this in a view, 
        // notice how there are two queries, yet the Returned Data 
        // is the same as the example 2
        return $films->each(function ($film) {
            return $film->text;
        });
    }    
}
