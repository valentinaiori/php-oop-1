<?php

class Movie{
    public $title;
    public $director;
    public $genre;
    public $year;
    public $vote;

    function __construct($_title, $_director, $_genre, $_year){
        $this->title = $_title;
        $this->director = $_director;
        $this->genre = $_genre;
        $this->year = $_year;

    }

    public function setVote($vote){
        $this->vote = $vote;
    }
    public function getvote(){
        return $this->vote;
    }
};



$movie1 = new Movie("Il discorso del re", "Tom Hooper", "storico-drammatico", "2010", "7.5");
$movie2 = new Movie("Perfetti sconosciuti", "Paolo Genovese", "commedia", "2016", "8.5");

$movie1->setVote(7.5);
$movie2->setVote(8.5);

echo "<pre>";
var_dump($movie1);
echo "</pre>";

echo "<pre>";
var_dump($movie2);
echo "</pre>";

?>