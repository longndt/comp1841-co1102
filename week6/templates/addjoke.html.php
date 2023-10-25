<form action="" method="post">
    <label for='joketext'>
        Type joke text
    </label>
    <textarea name="joketext" rows="3" cols="40">
   </textarea>
    <label for="">
        Select an author
    </label>
    <select name="authorid" id="">
        <?php
        foreach ($authors as $author) {
        ?>
            <option value="<?= $author['id'] ?>">
                <?= $author['name'] ?>
            </option>
        <?php
        }
        ?>
    </select>
    <input type="submit" name="submit" value="Add">
</form>