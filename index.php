<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>

<?php 

class Movie {
    public $name;
    public $description;
    public $ticket_price;
    public $image;

    public function getLenghtDescription(){
        return strlen ($this -> description);
    }

    public function getPrice(){
        return ceil($this -> ticket_price);
    }
}

//creo 2 istanze dello stesso oggetto //
$firstMovie = new Movie();
$secondMovie = new Movie();


$firstMovie->name = "Harry Potter and the Philosopher's Stone";
$firstMovie->description = "Late one night, Albus Dumbledore and Minerva McGonagall, professors at Hogwarts 
School of Witchcraft and Wizardry, along with groundskeeper Rubeus Hagrid, 
deliver an orphaned infant wizard named Harry Potter to his Muggle aunt and uncle,
Petunia and Vernon Dursley, his only living relatives... ";
$firstMovie->ticket_price = 15.55 ;


$secondMovie->name = "The Lord of the Rings: The Fellowship of the Ring";
$secondMovie->description = "In the Second Age of Middle-earth, the lords of Elves, Dwarves, and Men are given Rings of Power.
 Unbeknownst to them, the Dark Lord Sauron forges the One Ring in Mount Doom, 
instilling into it a great part of his power, to dominate the other Rings and conquer Middle-earth.
 A final alliance of Men and Elves battles Sauron's forces in Mordor.";
$secondMovie->ticket_price = 29.99 ;


var_dump($firstMovie,$secondMovie);
var_dump($firstMovie->getPrice(),$firstMovie->getLenghtDescription());
var_dump($secondMovie->getPrice(),$secondMovie->getLenghtDescription())
?>

    
</body>
</html>