<?php

  class Movie {

     public $title;
    public $year;
    public $duration;

    public function __construct($title, $year, $duration) {

        $this -> title = $title;
        $this -> year = $year;
        $this -> duration = $duration;
    }

    public function MovieTitle() {

        return $this -> title;
    }

    public function MovieYear() {

      return $this -> year;
    }

  public function MovieDuration() {

    return $this -> duration;
  }

}

  $movie1 = new Movie("Il Signore degli anelli - La compagnia dell'anello", 2001, 228);
  $movie2 = new Movie("Ritorno al futuro", 1985, 92);

  echo '<ul>';
    echo '<li>' . $movie1 -> MovieTitle() . " " . $movie1 -> MovieYear() . " " . $movie1 -> MovieDuration() . '</li>';
    echo '<li>' . $movie2 -> MovieTitle() . " " . $movie2 -> MovieYear() . " " . $movie2 -> MovieDuration() . '</li>';
  echo '</ul>';
?>