<?php
//classes start always with PascalCase
class Movie
{
    //inserire $var (chiamate attributes or fields)
    //prima della variabile specificare se  public || protected || private $var;
    public $title;
    public $actors;
    public $plot;
    public $genre;
    public $isProhibited;

    //cosntructor
    public function __construct($_title, $_actors, $_plot,  $_genre, $_isProhibited)
    {
        $this->title = $_title;
        $this->actors = $_actors;
        $this->plot = $_plot;
        $this->genre = $_genre;
        $this->isProhibited = $_isProhibited;
    }

    //methods condivise
    public function getTitle()
    {
        return $this->title;
    }
}

$movieOne = new Movie('Harry Potter', 'Daniel Radcliffe', 'trama', 'romanzo', false);

var_dump($movieOne);
