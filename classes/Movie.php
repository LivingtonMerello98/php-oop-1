<?php
class Movie
{
    private string $title;
    private string $description;
    private string $releaseDate;

    //class movie constructor con aggiunta del controllo per l'errore
    function __construct($_title, $_description, $_releaseDate)
    {
        $this->title = $_title;
        $this->description = $_description;
        $this->releaseDate = $_releaseDate;
    }
    //funzione per stampare su schermo
    public function print()
    {
        echo "Title: " . $this->title . ' ';
        echo "Description: " . $this->description . ' ';
        echo "Release Date: " . $this->releaseDate . ' ';
        echo '<br>';
    }

    public function getName()
    {
        return $this->title;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }
}
