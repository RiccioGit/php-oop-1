<!-- GOAL: nell'ottica di quanto visto a lezione, generare una classe User definendo alcune variabili d'istanza che rappresentino alcune informazioni rilevanti nella registrazione di un utente in un qualsiasi sito a vostra scelta. Generare inoltre costruttore e metodo toString nelle modalita' viste in classe. Generare inoltre alcune istanze della classe e stamparne il valore attraverso la toString -->


<?php

 class User {

   public $name;
   public $lastName;
   public $dateOfBirth;
   public $userName;
   public $password;

   public function __construct($name, $lastName, $dateOfBirth, $userName, $password) {

     $this -> name = $name;
     $this -> lastName = $lastName;
     $this -> dateOfBirth = $dateOfBirth;
     $this -> userName = $userName;
     $this -> password = $password;

   }

   public function __toString() {

     return "User<br>Name: " . $this -> name . "<br>"
          . "Last name: " . $this -> lastName . "<br>"
          . "Date of birth: " . $this -> dateOfBirth . "<br>"
          . "Username: " . $this -> userName . "<br>"
          . "Password: " . $this -> password . "<br>";

   }

 }


 $user = new User("Roberto", "Riccioli", "11/02/1992", "BestWebDeveloperInTheWorld1992" , "banane");

 echo $user . "<br>";
