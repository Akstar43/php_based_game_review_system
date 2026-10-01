<?php foreach($jokes as $joke): ?>
    <blockquote>
        <?= htmlspecialchars($joke['joketext'], ENT_QUOTES,'UTF-8') ?>
        (by <a href="mailto:<?=htmlspecialchars($joke['email'], ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($joke['name'], ENT_QUOTES, 'UTF-8'); ?></a>)
        <form action="deletejokes.php" method="post">
            <input type="hidden" name="id" value="<?= $joke['id'] ?>">
            <input onclick="return confirm('deleting joke will permenantly delete from database would you like to continue: ')" type="submit" value="Delete">
        </form>
        <form action="editjokes.php" method="post">
            <input type="hidden" name="id" value="<?= $joke['id']?>">
            <input type="submit" value="Edit">
        </form>

    </blockquote>
    <?php endforeach;?>