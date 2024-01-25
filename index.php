<?php 
include_once __DIR__ . '/classes/Movie.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS-->
    <link rel="stylesheet" href="style.css">
    <title>php-oop-1</title>
</head>
<body>
<header>
    <img src="" alt="">
</header>

<?php

$firstMovie = new Movie("Harry Potter and the Philosopher's Stone","Late one night, Albus Dumbledore and Minerva McGonagall, professors at Hogwarts 
School of Witchcraft and Wizardry, along with groundskeeper Rubeus Hagrid, 
deliver an orphaned infant wizard named Harry Potter to his Muggle aunt and uncle,
Petunia and Vernon Dursley, his only living relatives... ", 15.55, 'https://filmalibri.it/wp-content/uploads/2023/02/harry-potter-1.jpeg');


$secondMovie = new Movie("The Lord of the Rings: The Fellowship of the Ring","In the Second Age of Middle-earth, the lords of Elves, Dwarves, and Men are given Rings of Power.
Unbeknownst to them, the Dark Lord Sauron forges the One Ring in Mount Doom, 
instilling into it a great part of his power, to dominate the other Rings and conquer Middle-earth.
A final alliance of Men and Elves battles Sauron's forces in Mordor.", 29.99, 'https://www.sideshow.com/cdn-cgi/image/height=850,quality=90,f=auto/https://www.sideshow.com/storage/product-images/502113U/the-lord-of-the-rings-the-fellowship-of-the-ring_the-lord-of-the-rings_feature.jpg');


$thirdMovie = new Movie("The Prestige","In 1890s London, Robert Angier and Alfred Borden work as shills for a magician, under the mentorship of John Cutter, 
an engineer who designs stage magic. During a water tank trick, Angier's 
wife Julia fails to escape and drowns. Angier, devastated, accuses Borden of causing her death. 
The two become bitter enemies and part ways.", 17.20,"https://upload.wikimedia.org/wikipedia/en/d/d2/Prestige_poster.jpg");

$listMovies = [$firstMovie,$secondMovie,$thirdMovie,$firstMovie,$secondMovie,$thirdMovie];

var_dump($firstMovie,$secondMovie,$thirdMovie);

?>

    
</body>
</html>