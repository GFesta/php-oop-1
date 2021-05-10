<!-- Scopo dell'esercizio di oggi è prendere confidenza con 
la definizione, istanziazione ed utilizzo di Classi ed Oggetti.
Creare una classe Movie
Dichiarare le proprietà
Dichiarare il costruttore
Dichiarare almeno un metodo
Fare degli esempi di utilizzo della classe istanziando almeno 2 oggetti 
della stessa e stampando a schermo il valore delle proprietà -->

<!-- definisco una classe ‘Movie’
        => all'interno della classe dichiaro delle variabili d'istanza
        => all'interno della classe definisco un costruttore
        => all'interno della classe definisco almeno un metodo
istanzio almeno 2 oggetti ‘Movie’ e stampati a schermo i valori delle proprietà -->

<?php

    class Movie {
        public $title;
        public $year;
        public $genre;
        public $language;


        function __construct($_title, $_year, $_genre, $_language) {
            $this->title = $_title;
            $this->year = $_year;
            $this->genre = $_genre;
            $this->language = $_language;
        }

        public function getTitle() {
            return $this->title;
        }

        public function getYear() {
            return $this->year;
        }

        public function getGenre() {
            return $this->genre;
        }

        public function getLanguage() {
            return $this->language;
        }

    }
    $the_aeronauts = new Movie("The Aeronauts", "2019","Avventura/Azione", "English");
    echo "<h1> Titolo : " . $the_aeronauts->getTitle() . "</h1>";
    echo "<p> Anno produzione : " . $the_aeronauts->getYear() . "</p>";
    echo "<p> Genere : " . $the_aeronauts->getGenre() . "</p>";
    echo "<p> Lingua originale : " . $the_aeronauts->getLanguage() . "</p>";

    $bliss = new Movie("Bliss", "2021", "Fantascienza/Drammatico", "English");
    echo "<h1> Titolo : " . $bliss->getTitle() . "</h1>";
    echo "<p> Anno produzione : " . $bliss->getYear() . "</p>";
    echo "<p> Genere : " . $bliss->getGenre() . "</p>";
    echo "<p> Lingua originale : " . $bliss->getLanguage() . "</p>";

    $the_bachelors = new Movie("The Bachelors", "2017", "Commedia/Drammatico", "English");
    echo "<h1> Titolo : " . $the_bachelors ->getTitle() . "</h1>";
    echo "<p> Anno produzione : " . $the_bachelors ->getYear() . "</p>";
    echo "<p> Genere : " . $the_bachelors ->getGenre() . "</p>";
    echo "<p> Lingua originale : " . $the_bachelors ->getLanguage() . "</p>";

?>