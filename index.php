<!-- definiamo una classe ‘Movie’ : -->

<?php

// => all'interno della classe sono dichiarate delle variabili d'istanza 

 class Movie {
    public $title;
    public $duration;

    // => all'interno della classe è definito un costruttore

    function __construct(string $title, Genres $genre, int $duration,){
        $this->title = $title;
        $this->duration = $duration;
        $this->genre = $genre;
    }
    
    // => all'interno della classe è definito almeno un metodo
        
        function getTitle(){
            return $this->title;
        }
 }

    // Bonus 1:
    // Modificare la classe Movie in modo che accetti piú di un genere.

 class Genres {
    public $genre;
    public $secondGenre;
    public $thirdGenre;

    function __construct(string $genre, string $secondGenre, string $thirdGenre){
        $this->genre = $genre;
        $this->secondGenre = $secondGenre;
        $this->thirdGenre = $thirdGenre;
    }
}


    //  vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

    $western = new Movie('il Buono, il Brutto e il Cattivo', new Genres('spaghetti Western', ' ',' ') ,180);
    echo $western->getTitle();
    var_dump($western);

    $animation = new Movie('Porco Rosso',new Genres('animation', ' ',' '), 102);
    echo $animation->getTitle();
    var_dump($animation);
 ?>