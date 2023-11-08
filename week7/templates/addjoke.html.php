<form action="" method="post">
    <label for='joketext'>Type your joke here;</label>
    <textarea name="joketext" rows="3" cols="40"></textarea>

    <!-- AVOID USING HARD CODING -->
    <!--
    <label for="">Select an author</label>
    <select name="authorid" id="">
        <option value="1">Author 1</option>
        <option value="2">Author 2</option>
        <option value="3">Michael</option>
    </select>

    <label for="">Select a category</label>
    <select name="categoryid" id="">
        <option value="1">Category 1</option>
        <option value="2">Category 2</option>
    </select>
    -->

    <!-- use foreach loop to display all data from
    each table to drop-down list -->
    <label for="">Select an author</label>
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

    <label for="">Select a category</label>
    <select name="categoryid" id="">
        <?php
        foreach ($categories as $category) {
        ?>
            <option value="<?= $category['id'] ?>">
                <?= $category['name'] ?>
            </option>
        <?php
        }
        ?>
    </select>

    <input type="submit" name="submit" value="Add">
</form>