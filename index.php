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
<?php

$firstMovie = new Movie("Harry Potter and the Philosopher's Stone", "Late one night, Albus Dumbledore and Minerva McGonagall, professors at Hogwarts 
School of Witchcraft and Wizardry, along with groundskeeper Rubeus Hagrid, 
deliver an orphaned infant wizard named Harry Potter to his Muggle aunt and uncle,
Petunia and Vernon Dursley, his only living relatives... ", 15.55, 'https://filmalibri.it/wp-content/uploads/2023/02/harry-potter-1.jpeg');


$secondMovie = new Movie("The Lord of the Rings: The Fellowship of the Ring", "In the Second Age of Middle-earth, the lords of Elves, Dwarves, and Men are given Rings of Power.
Unbeknownst to them, the Dark Lord Sauron forges the One Ring in Mount Doom, 
instilling into it a great part of his power, to dominate the other Rings and conquer Middle-earth.
A final alliance of Men and Elves...", 29.99, 'https://www.sideshow.com/cdn-cgi/image/height=850,quality=90,f=auto/https://www.sideshow.com/storage/product-images/502113U/the-lord-of-the-rings-the-fellowship-of-the-ring_the-lord-of-the-rings_feature.jpg');


$thirdMovie = new Movie("Fear and Loathing in Las Vegas", "In 1971, Raoul Duke and Dr. Gonzo speed across the Nevada desert. Duke, under the influence of mescaline, complains of a swarm of giant bats, and inventories their drug stash. They pick up a young hitchhiker
 and explain their mission: Duke has been assigned by a magazine to cover the Mint
  400 motorcycle race in Las Vegas. ", 17.25, "https://s3.amazonaws.com/criterion-production/films/2eab6c19498ccc9c45709af90f0cc5da/POE0rbVpiFeXo7erOISf126v663x9J_large.jpg");

$listMovies = [$firstMovie, $secondMovie, $thirdMovie, $firstMovie, $secondMovie, $thirdMovie];



?>

<body>
    <header>
        <img src="./img/logoCinema.png" alt="cinema logo">
        <div>
            <h1>Cinema Boolean</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <?php foreach ($listMovies as $movie) { ?>
                <div class="card">
                    <div class="container-image">
                        <img class="my-img" src="<?php echo $movie->image ?>" alt="Film image">
                    </div>
                    <div class="card-bottom">
                        <div>
                            <h5 class="card-title"><?php echo $movie->title ?></h5>
                        </div>
                        <div>
                            <p class="card-text"><?php echo $movie->plot ?></p>
                        </div>
                        <div>
                            <a href="#">&euro;<?php echo $movie->ticket_price ?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>



</body>

</html>