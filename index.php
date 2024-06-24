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

    //funzione per stampare su schermo
    public function print()
    {
        echo "Title: " . $this->title . ' ';
        echo "Description: " . $this->description . ' ';
        echo "Release Date: " . $this->releaseDate . ' ';
        echo '<br>';
    }
}


$movie1 = new Movie('Transformers', 'lorem ipsum', '2012');
$movie2 = new Movie('I am Legend', 'lorem ipsum', '2012');
$movie3 = new Movie('E.T', 'lorem ipsum', '2012');


$movie1->print();
$movie2->print();
$movie3->print();
