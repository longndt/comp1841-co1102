<table border=1>
   <tr>
      <th colspan="4">JOKE LIST</th>
   </tr>
   <tr>
      <th>Joke id</th>
      <th>Joke text</th>
      <th>Joke date</th>
      <th>Joke image</th>
   </tr>
   <?php
   foreach ($jokes as $joke) {
   ?>
      <tr>
         <td><?= $joke['id'] ?></td>
         <td><?= $joke['joketext'] ?></td>
         <td>
            <?= date('d/m/Y', strtotime($joke['jokedate'])) ?>
         </td>
         <td>
            <img src="images/<?= $joke['image'] ?>" width="100" height="100">
         </td>
      </tr>
   <?php } ?>
</table>