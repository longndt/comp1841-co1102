<?php foreach ($jokes as $joke) : ?>
   <blockquote>
      <?= htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8') ?>
      <a href="deletejoke.php?id=<?= $joke['id'] ?> " onclick="return confirm('Are you sure to delete this joke ?')" ;">
         Delete </a>
   </blockquote>
<?php endforeach; ?>