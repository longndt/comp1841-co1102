<?php
if (!isset($_POST['update'])) {
   try {
      include 'includes/DatabaseConnection.php';

      $sql = "SELECT * FROM joke
           WHERE id = :id";
      $stm = $pdo->prepare($sql);
      $stm->bindValue(':id', $_POST['id']);
      $stm->execute();
      $joke = $stm->fetch();

      $title = "Update joke";
      ob_start();
      include 'templates/editjoke.html.php';
      $output = ob_get_clean();
      include 'templates/layout.html.php';
   } catch (PDOException $ex) {
      echo "Error : $ex";
   }
} else {
   try {
      include 'includes/DatabaseConnection.php';

      $sql = "UPDATE joke 
              SET joketext = ?,
                  jokedate = ?
              WHERE id = ?
              ";
      $stm = $pdo->prepare($sql);
      $stm->bindParam(1, $_POST['joketext']);
      $stm->bindParam(2, $_POST['jokedate']);
      $stm->bindParam(3, $_POST['id']);
      $stm->execute();
      header('location: jokes.php');
   } catch (PDOException $ex) {
      echo "Error : $ex";
   }
}
