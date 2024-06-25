<?php
//collegamento con il file Movie
include __DIR__ . '/classes/Movie.php';

//array di film
$movies = [
    new Movie('Transformers', 'Un film d\'azione sui robot.', '2007-07-03'),
    new Movie('Io sono Leggenda', 'Un thriller post-apocalittico.', '2007-12-14'),
    new Movie('E.T.', 'Un film di fantascienza su un alieno amichevole.', '1982-06-11')
]


?>

<!-- try {  

} catch (Exception $e) {
    echo 'errore: ' . $e->getMessage();
} -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie php</title>
</head>

<body>
    <h1>Lista dei film</h1>
    <?php
    // Iterare attraverso l'array e stampare i dettagli dei film
    foreach ($movies as $movie) {
        echo "<div>";
        echo "<h2>Title: " . $movie->getName() . "</h2>";
        echo "<p>Description: " . $movie->getDescription() . "</p>";
        echo "<p>Release Date: " . $movie->getReleaseDate() . "</p>";
        echo "</div>";
    }
    ?>
</body>

</html>