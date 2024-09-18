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
?>