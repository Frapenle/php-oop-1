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
    public $isPprohibited;
}

//gli oggetti/istanze della classe si generano ==> $var = new Class();