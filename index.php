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
echo($movie1->title);
echo($movie1->director);
echo($movie1->genre);

$movie2 = new Movie("Perfetti sconosciuti", "Paolo Genovese", "commedia", "2016", "8.5");
echo($movie2->title);
echo($movie2->director);
echo($movie2->genre);


$movie1->setVote(7.5);
$movie2->setVote(8.5);


var_dump($movie1);
var_dump($movie2);

?>