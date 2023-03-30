








<?php

//Definizione della classe Movie
  class Movie{

     //1.Dichiarazione delle variabili d'istanza
     public $titolo;
     public $genere;
     public $regista;


    //2.Definizione del costruttore
    public function __construct($titolo, $genere, $regista) {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->regista = $regista;
      }
  

    //3.Definizione metodo
    public function getInfo() {
        return "Titolo: " . $this->titolo . ", Genere: " . $this->genere . ", Regista: " . $this->regista;
      }
  }
 

 //4.Istanza di due oggetti Movie  

 $movie1 = new Movie("Her","science-fiction/romantic drama", "Spike Jonze");
$movie2 = new Movie("Avatar","science-fiction", "James Cameron");




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PHP OOOP</title>
</head>
<body class="bg-dark">


   <div class="col-11 d-flex justify-content-center mt-5">

      <h1 class="text-danger pt-5">PHP OOP: i tuoi film preferiti stampati da noi! </h1>

    </div>

    <!-- 5.STAMPA OGGETTI -->

   <div class="col-11 d-flex justify-content-center mt-5">

      <h3 class="text-danger"></h3>
      <h3 class="text-danger"></h3>

  </div>

    
</body>
</html>