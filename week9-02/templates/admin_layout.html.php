<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../jokes.css">
        <title><?=$title?></title>
    </head>
    <body>
        <header id="admin">
        <h1>Internet Joke Database Admin Area<br />
        Manage jokes, categories and authors</h1></header>
        <nav>
            <ul>
                <!-- <li><a href="index.php">Home</a></li> -->
                <li><a href="jokes.php">Jokes List</a></li>
                <li><a href="addjoke.php">Add a new joke</a></li>
                <li><a href="../index.php">Public Site</a></li>
            </ul>
        </nav>
        <main>
            <?=$output?>
        </main>
        <footer>&copy; IJDB 2023</footer>
    </body>
</html>