<?php
//classes start always with PascalCase
class Movie
{
    //inserire $var (chiamate attributes or fields)
    //prima della variabile specificare se  public || protected || private $var;
    public $title;
    public $actors;
    public $plot;
    public $genres;
    public $isProhibited;

    //cosntructor
    public function __construct($_title, $_actors, $_plot,  $_genres, $_isProhibited)
    {
        $this->title = $_title;
        $this->actors = $_actors;
        $this->plot = $_plot;
        $this->genre = $_genres;
        $this->isProhibited = $_isProhibited;
    }

    //methods condivise
    public function getTitle()
    {
        return $this->title;
    }
    public function getActors()
    {
        return $this->actors;
    }
    public function getPlot()
    {
        return $this->plot;
    }
    public function getGenres()
    {
        return $this->genres;
    }
    public function isProhibited()
    {
        return $this->isProhibited;
    }
}

$harry_potter_1 = new Movie('Harry Potter', 'Daniel Radcliffe', 'trama', 'romanzo', false);
$harry_potter_2 = new Movie('Harry Potter 2', 'Daniel Radcliffe', 'trama', 'romanzo', false);
$batman = new Movie('Batman begins', 'Christian Bale', 'trama', 'azione', true);
$spiderman = new Movie('Harry Potter', 'Daniel Radcliffe', 'trama', 'azione', false);
