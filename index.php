<!-- definiamo una classe ‘Movie’ : -->

<?php

// => all'interno della classe sono dichiarate delle variabili d'istanza 

 class Movie {
    public $title;
    public $genre;
    public $duration;

    // => all'interno della classe è definito un costruttore

    function __construct(string $title, string $genre, int $duration){
        $this->title = $title;
        $this->genre = $genre;
        $this->duration = $duration;
    }

    // => all'interno della classe è definito almeno un metodo
        
        function getTitle(){
            return $this->title;
        }
 }


//  vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

    $western = new Movie('il Buono, il Brutto e il Cattivo', 'spaghetti Western', 180);
    echo $western->getTitle();
    var_dump($western);

    $animation = new Movie('Porco Rosso', 'animation', 102);
    echo $animation->getTitle();
    var_dump($animation);
 ?>