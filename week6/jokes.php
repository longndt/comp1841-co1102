<?php
try {
    include 'includes/DatabaseConnection.php';

    $sql = 'SELECT joke.id, 
            joke.joketext,      
            author.name, 
            author.email 
            FROM joke
            INNER JOIN author
            ON joke.authorid = author.id
            ORDER BY joke.id DESC 
            ';
    //order by id desc: new joke appear on the top
    $jokes = $pdo->query($sql);
    $title = 'Joke list';

    ob_start();
    include 'templates/jokes.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occured';
    $output = 'Database error: ' . $e->getMessage();
}
include 'templates/layout.html.php';
