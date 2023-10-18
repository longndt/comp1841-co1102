<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Web layout demo</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="stylesheet" href="templates/style.css">
</head>

<body>
   <nav class="nav justify-content-center ">
      <a class="nav-link" href="index.php">Homepage</a>
      <a class="nav-link" href="about.php">About</a>
   </nav>

   <?= $content ?>

   <p class="text bg-danger text-center">Copyright by COMP1841 - Fall 2023</p>
</body>

</html>