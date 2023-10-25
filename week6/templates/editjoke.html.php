<form action="" method="post">
   <label for='joketext'>
      Type joke text
   </label>
   <input type="text" name="joketext" value="<?= $joke['joketext'] ?>">
   <label for='joketext'>
      Select joke date
   </label>
   <input type="date" name="jokedate" value="<?= $joke['jokedate'] ?>">
   <input type="hidden" name="id" value="<?= $joke['id'] ?>">
   <input type="submit" name="update" value="Update">
</form>