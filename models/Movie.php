<?php
require_once __DIR__ . '/Genre.php';
include __DIR__ . '/Actor.php';

//classes start always with PascalCase
//the class name MUST be equal to the file name
class Movie
{
    //inserire $var (chiamate attributes or fields)
    //prima della variabile specificare se  public || protected || private $var;
    public $title;
    public $actors;
    public $plot;
    public $genres;
    public $isProhibited;
    public $image;

    //cosntructor
    public function __construct($_title, Actor $_actors, $_plot, Genre $_genres, $_isProhibited, $image)
    {
        $this->title = $_title;
        $this->actors = $_actors;
        $this->plot = $_plot;
        $this->genres = $_genres;
        $this->isProhibited = $_isProhibited;
        $this->image = $image;
    }

    //methods condivise, Method names MUST be declared in camelCase
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

    public function isProhibited()
    {
        if ($this->isProhibited) {
            echo 'img/forbidden.png';
        } else {
            echo 'img/free.png';
        }
    }
    public function getImage()
    {
        return $this->image;
    }

    public function getAllInfo()
    {
        $allInfo = $this->title . $this->actors . $this->plot . $this->genres;
        return $allInfo;
    }
}

// $harry_potter_1 = new Movie('Harry Potter', 'Daniel Radcliffe', 'tt', new Genre(), false, 'https://www.warnerbros.it/sites/default/files/HP1_MOVIE_V_DD_KA_TT_1400x2100_300dpi_IT.jpg');
// var_dump($harry_potter_1);
