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

    $movie1 = new Movie('Transformers', 'Un film d\'azione sui robot.', '2007-07-03');
    $movie2 = new Movie('Io sono Leggenda', 'Un thriller post-apocalittico.', '2007-12-14');
    $movie3 = new Movie('E.T.', 'Un film di fantascienza su un alieno amichevole.', '1982-06-11');



    $movie1->print();
    $movie2->print();
    $movie3->print();
} catch (Exception $e) {
    echo 'errore: ' . $e->getMessage();
}
