
<?php foreach($jokes as $joke): ?>
    <blockquote>
        <?= htmlspecialchars($joke['joketext'], ENT_QUOTES,'UTF-8') ?>
        <form action="deletejokes.php" method="post">
            <input type="hidden" name="id" value="<?= $joke['id'] ?>">
            <input onclick="return confirm('deleting joke will permenantly delete from database would you like to continue: ')" type="submit" value="Delete">
        </form>

    </blockquote>
    <?php endforeach;?>