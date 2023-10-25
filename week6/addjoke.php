<?php
if (isset($_POST['joketext'])) {
    try {
        include 'includes/DatabaseConnection.php';

        //1st solution: set default value for authorid
        $sql1 = 'INSERT INTO joke SET
        joketext = :joketext,
        jokedate = CURDATE(),
        authorid = 1';

        //2nd solution: display a drop-down list to select author
        $sql2 = 'INSERT INTO joke SET
        joketext = :joketext,
        jokedate = CURDATE(),
        authorid = :authorid';

        $stmt = $pdo->prepare($sql2);
        $stmt->bindValue(':joketext', $_POST['joketext']);
        $stmt->bindValue(':authorid', $_POST['authorid']);
        $stmt->execute();
        header('location: jokes.php');
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
} else {
    try {
        include 'includes/DatabaseConnection.php';
        $sql = "SELECT * FROM author";
        $authors = $pdo->query($sql);

        $title = 'Add a new joke';
        ob_start();
        include 'templates/addjoke.html.php';
        $output = ob_get_clean();
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}
include 'templates/layout.html.php';
