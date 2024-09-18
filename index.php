<?php
    class movie{
        public $title;
        public $genre;
        public $year;

        function __construct($_title,$_genre,$_year){
            $this->title = $_title;
            $this->genre = $_genre;
            $this->year = $_year;
        }

        public function getMovieInfo(){
            return $this->title." ".$this->genre." ".$this->year;
        }
    }

    $tts = new movie('The Truman Show', 'Comedy/Sci-fi', 1998);
    $atsv = new movie('Spiderman-Man: Across the Spider-Verse', 'Action/Comedy', 2023);

    echo $tts->getMovieInfo();
    echo "<hr>";
    echo $atsv->getMovieInfo();
?>