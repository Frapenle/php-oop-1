<?php
class Genre
{
    //variables
    public $genres;

    //constructor
    public function __construct($_genres)
    {
        $this->genres = $_genres;
    }

    //methods
    public function getGenres()
    {
        return $this->genres;
    }
    public function __toString()
    {
        return implode(", ", $this->genres);
    }
}
