<?php
foreach($jokes as $joke): ?>
        <blockquote>
        <?=htmlspecialchars($joke['joketext'], ENT_QUOTES,'UTF-8')?>

        <form action="deletejoke.php" method="post">
                <input type="hidden" name="id" value="<?=$joke['id']?>">
                <input type="submit" value="Delete">
        </form>
        </blockquote>
        <?php endforeach;?>

        