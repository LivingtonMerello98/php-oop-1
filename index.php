<?php

//definizione classe e attributi
class Movie
{
    public $title;
    public $description;
    public $releaseDate;

    //class movie constructor con aggiunta del controllo per l'errore
    public function __construct($title, $description, $releaseDate)
    {
        if (empty($title) || empty($description) || empty($releaseDate)) {
            throw new Exception("tutti i parametri devono essere soddisfatti e non vuoti");
        }
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



try {

    $movie1 = new Movie('Transformers', 'lorem ipsum', '2012');
    $movie2 = new Movie('I am Legend', 'lorem ipsum', '2012');
    $movie3 = new Movie('E.T', '', '2012');


    $movie1->print();
    $movie2->print();
    $movie3->print();
} catch (Exception $e) {
    echo 'errore: ' . $e->getMessage();
}
