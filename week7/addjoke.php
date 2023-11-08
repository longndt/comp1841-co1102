<?php
if(isset($_POST['joketext'])){
    try{
        include 'includes/DatabaseConnection.php';
        $sql = 'INSERT INTO joke SET
        joketext = :joketext,
        jokedate = CURDATE(),
        authorid = :authorid,
        categoryid = :categoryid';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':joketext', $_POST['joketext']);
        $stmt->bindValue(':authorid', $_POST['authorid']);
        $stmt->bindValue(':categoryid', $_POST['categoryid']);
        $stmt->execute();
        header('location: jokes.php');
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    try {
        include 'includes/DatabaseConnection.php';
        $sql1 = 'SELECT * FROM author';
        $sql2 = 'SELECT * FROM category';
        $authors = $pdo->query($sql1);
        $categories = $pdo->query($sql2);

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

