<!-- // è definita una classe ‘Movie’
//         => all'interno della classe sono dichiarate delle variabili d'istanza
//         => all'interno della classe è definito un costruttore
//         => all'interno della classe è definito almeno un metodo
//         vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
//  -->

<?php


class Movie {
    public $titolo;
    public $genere;
    public $regista;

    function __construct($_titolo, $_genere){
        $this->titolo = $_titolo;
        $this ->genere = $_genere;
    }

    public function getTitolo(){
        return $this->titolo;
    }
}

// creo un'istanza con classe Movie

$titanic = new Movie('Titanic', 'storico');

// stampo il nome dell'stanza creata
echo '<h1> Titolo della variabile "$titanic":' . $titanic->getTitolo() . '</h1>';

// assegno un valore alla variabile regista dell'istanza titanic
$titanic->regista = 'James Cameron';
// stampo in pagina
echo '<h1> Regista della variabile "$titanic": ' . $titanic->regista . '</h1>';

// creo una nuova istanza con classe Movie

$titanic = new Movie('Scarface', 'Brian De Palma');

// stampo in pagina
echo '<h1> Titolo della variabile "$titanic":' . $titanic->getTitolo() . '</h1>';

$titanic->regista = 'Brian De Palma';

echo '<h1>Regista della variabile "$titanic":' . $titanic->regista . '</h1>';

 ?>
