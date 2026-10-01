<form action="editjokes.php" method="post">
    <label for="joketext">Type Joke Text</label>
    <textarea name="joketext" rows="3" cols="40">
    <?= $joke['joketext'] ?>
    </textarea>
    <input type="hidden" name="id" value="<?= $joke['id'] ?>">
    <input type="submit" name="submit" value="edit">
</form>