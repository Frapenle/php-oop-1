<?php
class Actor
{
    //variables
    public $actors;

    //constructor
    public function __construct($_actors)
    {
        $this->actors = $_actors;
    }

    //methods
    public function getActors()
    {
        return $this->actors;
    }
    public function __toString()
    {
        return implode(", ", $this->actors);
    }
}
