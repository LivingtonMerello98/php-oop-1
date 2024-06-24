<?php

//definizione classe e attributi
class Movie
{
    public $title;
    public $description;
    public $releaseDate;

    //class movie constructor
    public function __construct($title, $description, $releaseDate)
    {
        $this->title = $title;
        $this->description = $description;
        $this->releaseDate = $releaseDate;
    }
}
