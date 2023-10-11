<?php
/* 
establish a connection between PHP (back-end) & MySQL (database)
using PDO (PHP Data Object) technique 
   mysql: database server
   localhost (127.0.0.1): local server in our PC
   week4: database name
   utf8mb4: unicode encoding
   root: db username
   '' (empty) : db password
   Note: xampp (root - empty)
         mamp  (root - root)
*/
try {
   $pdo = new PDO(
      'mysql:host=127.0.0.1;
                dbname=week4;
                charset=utf8mb4',
      'root',
      ''
   );
   $result = 'connect to db succeed !';

   //create an sql statement for data query
   $sql = "SELECT * FROM joke";
   //execute that query & save output to new variable
   $jokes = $pdo->query($sql);
} catch (PDOException $e) {
   $result = 'connect to db failed ! <br>';
   $result .= $e->getMessage();
   /* show detail error */
}

//dislay the result in other PHP file
include 'result.html.php';