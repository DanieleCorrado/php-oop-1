<?php

  class Movie {

     public $title;
    public $year;
    public $duration;
    public $genre = array();

    public function __construct($title, $genre, $year, $duration) {

        $this -> title = $title;
        $this -> genre = $genre;
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

  public function MovieGenre() {

    $genreList = "";


    foreach ($this -> genre as $value) {
      $genreList .= $value . " ";
    }

    return $genreList;
    
  }

}

  $movie1 = new Movie("Il Signore degli anelli - La compagnia dell'anello", ["fantasy", "Avventura"], 2001, 228);
  $movie2 = new Movie("Ritorno al futuro", ["avventura"], 1985, 92);

  echo '<ul>';
    echo '<li> Titolo: ' . $movie1 -> MovieTitle() . " Genere: " . $movie1 -> MovieGenre() . " Anno: " . $movie1 -> MovieYear() . " Durata: " . $movie1 -> MovieDuration() . ' Minuti</li>';
    echo '<li> Titolo: ' . $movie2 -> MovieTitle() . " Genere: " . $movie2 -> MovieGenre() . " Anno: " . $movie2 -> MovieYear() . " Durata: " . $movie2 -> MovieDuration() . ' Minuti</li>';
  echo '</ul>';
?>