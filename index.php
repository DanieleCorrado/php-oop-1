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
    echo '<li> Titolo: ' . $movie1 -> MovieTitle() . " Anno: " . $movie1 -> MovieYear() . " Durata: " . $movie1 -> MovieDuration() . ' Minuti</li>';
    echo '<li> Titolo: ' . $movie2 -> MovieTitle() . " Anno: " . $movie2 -> MovieYear() . " Durata: " . $movie2 -> MovieDuration() . ' Minuti</li>';
  echo '</ul>';
?>