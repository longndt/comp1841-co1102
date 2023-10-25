<?php
foreach ($jokes as $joke) : ?>
   <blockquote>
      <?= $joke['joketext'] ?>
      (
      <a href="mailto:<?= $joke['email'] ?>">
         <?= $joke['name'] ?>
      </a>
      )
      <form action="editjoke.php" method="post">
         <input type="hidden" name="id" value="<?= $joke['id'] ?>">
         <input type="submit" value="Update">
      </form>
      <form action="deletejoke.php" method="post">
         <input type="hidden" name="id" value="<?= $joke['id'] ?>">
         <input type="submit" value="Delete">
      </form>
   </blockquote>
<?php endforeach; ?>