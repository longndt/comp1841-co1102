<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Result</title>
   <style>
   h1 {
      color: red;
      background-color: yellow;
      border: 3px solid blue;
      text-align: center;
      text-transform: capitalize;
   }
   </style>
</head>

<body>
   <?php
   error_reporting(0); //hide error
   ?>

   <table border="1">
      <tr>
         <th>Joke id</th>
         <th>Joke text</th>
         <th>Joke date</th>
      </tr>
      <?php
      /* display 1 record in table MySQL as 1 row in table of webpage */
      foreach ($jokes as $joke) {
      ?>
      <tr>
         <!-- display seperate column in table -->
         <td><?= $joke['id'] ?></td>
         <td><?= $joke['joketext'] ?></td>
         <td><?= $joke['jokedate'] ?></td>
      </tr>
      <?php
      }
      ?>
   </table>




</body>

</html>