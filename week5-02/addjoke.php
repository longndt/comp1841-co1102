<?php
//case 1: render ra form cho người dùng nhập liệu 
if (!isset($_POST['joketext'])) {
   $title = 'Add joke';
   ob_start();
   include 'templates/addjoke.html.php';
   $output = ob_get_clean();
   include 'templates/layout.html.php';
}
//case 2: xử lý dữ liệu từ form sau khi người dùng đã nhập
else {
   try {
      include 'includes/DatabaseConnection.php';
      $joketext = $_POST['joketext'];
      $jokedate = $_POST['jokedate'];
      $sql1 = "INSERT INTO joke (joketext, jokedate)
               VALUES (:joketext, :jokedate)";
      $sql2 = "INSERT INTO joke
               SET joketext = :joketext,
                   jokedate = :jokedate";
      $sql3 = "INSERT INTO joke
               SET joketext = ?,
                   jokedate = ?";
      $stm = $pdo->prepare($sql3);
      //$stm->bindValue(":joketext", $_POST['joketext']);
      //$stm->bindValue(":jokedate", $_POST['jokedate']);
      $stm->bindParam(1, $_POST['joketext']);
      $stm->bindParam(2, $_POST['jokedate']);
      $stm->execute();
      header('location: jokes.php');
   } catch (PDOException $ex) {
      echo "Exception: $ex";
   }
}