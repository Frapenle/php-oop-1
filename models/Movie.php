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
    public $image;

    //cosntructor
    public function __construct($_title, $_actors, $_plot,  $_genres, $_isProhibited, $image)
    {
        $this->title = $_title;
        $this->actors = $_actors;
        $this->plot = $_plot;
        $this->genres = $_genres;
        $this->isProhibited = $_isProhibited;
        $this->image = $image;
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
}
