<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>
</head>

<body>
   <!-- use form to send data 
   post.php : destination file to receive data
   method: POST (data is secured -> not show in url)
   -->
   <form action="post.php" method="post">
      <fieldset>
         <legend>User Login</legend>
         Email: <input type="email" name="email" required>
         <br><br>
         Password: <input type="password" name="password" required>
         <br><br>
         <input type="submit" value="Login">
      </fieldset>
   </form>
</body>

</html>