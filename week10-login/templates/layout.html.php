<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="jokes.css">
        <title><?=$title?></title>
    </head>
    <body>
        <header><h1>Internet Joke Database</h1></header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="jokes.php">jokes List</a></li>
                <li><a href="admin/login/Login.html">Admin Login</a></li>
            </ul>
        </nav>
        <main>
            <?=$output?>
        </main>
        <footer>&copy; IJDB 2023</footer>
    </body>
</html>