<?php

/*

php-ajax-dischi
Stampare a schermo una decina di dischi musicali (vedi screenshot).
Utilizzare:
Html, Sass, JS, VueJS, PHP

Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.

Seconda Milestone:
Attraverso l’utilizzo di AJAX: al caricamento della pagina ajax chiederà attraverso una chiamata i dischi a php e li stamperà attraverso VueJS.

Bonus:
Attraverso un’altra chiamata ajax, filtrare gli album per artista
Lo screenshot si trova nelle slide. 

*/

$albums = [
    "first" => 
        [
            "cover" => "https://upload.wikimedia.org/wikipedia/en/2/2c/CranberriesNoNeedToArgueAlbumcover.jpg",
            "title" => "No Need To Argue",
            "author" => "Cranberries",
            "year" => 1994
        ],
    "second" => 
        [
            "cover" => "https://img.discogs.com/KW4dwyWnKUMYRJeCGKE3fCsz1oY=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-2454688-1329519357.jpeg.jpg",
            "title" => "Amen",
            "author" => "Baustelle",
            "year" => 2008
        ],
    "third" => 
        [
            "cover" => "https://www.amica.it/wp-content/uploads/2019/10/71HYE7gX82L._SS500_.jpg?v=853883",
            "title" => "Fisiognomica",
            "author" => "Franco Battiato",
            "year" => 1988
        ],
    "fourth" => 
        [
            "cover" => "https://images-na.ssl-images-amazon.com/images/I/51%2BSJza68kL._SX466_.jpg",
            "title" => "Under a violet moon",
            "author" => "Blackmore's night",
            "year" => 1996
        ],
    "fifth" => 
        [
            "cover" => "https://images-na.ssl-images-amazon.com/images/I/81yGSabsVjL._AC_SX425_.jpg",
            "title" => "The last of the Mohicans",
            "author" => "Trevor Jones - Randy Edelman",
            "year" => 1992
        ],
    "sixth" => 
        [
            "cover" => "https://images-na.ssl-images-amazon.com/images/I/41hKOdqFCKL._AC_.jpg",
            "title" => "Life for rent",
            "author" => "Dido",
            "year" => 2003
        ],
    "seventh" => 
        [
            "cover" => "https://e.snmc.io/i/600/s/fe534af5b5f6b161ff95d9e65be36529/6138287/clio-clio-Cover-Art.jpg",
            "title" => "Clio",
            "author" => "Clio",
            "year" => 2016
        ],
    "eighth" => 
        [
            "cover" => "https://m.media-amazon.com/images/I/61ce-LYYjiL._AC_UL320_.jpg",
            "title" => "The Lord of the Rings",
            "author" => "Howard Shore",
            "year" => 2001
        ],
    "ninth" => 
        [
            "cover" => "https://upload.wikimedia.org/wikipedia/en/thumb/a/a0/ReiseReise.jpg/220px-ReiseReise.jpg",
            "title" => "Reise Reise",
            "author" => "Rammstein",
            "year" => 2004
        ]
];




?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <!-- meta properties -->
        <meta charset="utf-8">
        <meta name="author" content="Romina Trazzi">
        <meta name="description" content="Esercizio Dischi con Ajax, Sass e Php">
        <meta name="keywords" content="php, dischi, sass, PHP, Spotify">
        <!-- / meta properties -->
                
        <title>Esercizio Dischi</title>

        <!-- fogli di stile -->
        <link rel="stylesheet" href="dist/css/style.css" media="screen, all">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />  
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
        <!-- / fogli di stile -->
    </head>

    <body>
    
        <!-- Container -->
        <div class="container">
            <!-- Navbar -->
            <nav>
               <img src="https://www.scdn.co/i/_global/twitter_card-default.jpg" alt ="logo Spotify">
            </nav>
            <!-- / Navbar -->
            
            <!-- Main -->
            <main>
                <div class="box">
                <?php 
                    foreach ($albums as $album => $item) {
                        echo "<div class ='disc'>";
                        echo "<img src=" . $item["cover"] . ">";
                        echo "<p class='title'>" . $item["title"] . "</p>";
                        echo "<p class='author'>" . $item["author"] . "</p>";
                        echo "<p class='year'>" . $item["year"] . "</p>";
                        echo "</div>";
                    }
                ?>
                </div>
            </main>
           
        </div>
        <!-- / Container -->

    </body>

</html>

