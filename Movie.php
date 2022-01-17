<?php

//classe
  class Movie{
    public $title;
    public $plot;
    public $review;
    public $genre;

    function __construct($_title, $_plot, $_review, $_genre){
      $this->title = $_title;
      $this->plot = $_plot;
      $this->review = $_review;
      $this->genre = $_genre;
    }

    function setGenre($_genre){
      $this ->genre = $_genre;
    }
  }

?>