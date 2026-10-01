<p><?=$totalJokes?> jokes uploaded to internet joke database</p>
<table cellspacing="10px" border="1px" style="text-align: center;">
<?php foreach($jokes as $joke): ?>
    <tr>
    <td width="150px">
        <img style="height: 60px;" src="images/<?= htmlspecialchars($joke['images'], ENT_QUOTES, 'UTF-8')?>">
        </td>
        <td width="400px">
        Joke text: <?= htmlspecialchars($joke['joketext'], ENT_QUOTES,'UTF-8') ?>
        <td width="150px" style="text-align: center;">
        <br /> Category: <?= htmlspecialchars($joke['categoryName'], ENT_QUOTES, 'UTF-8') ?>
        </td>
        <td width="150px">
        (by <a href="mailto:<?=htmlspecialchars($joke['email'], ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($joke['name'], ENT_QUOTES, 'UTF-8'); ?></a>)
        </td>
        <td>
        <form action="deletejokes.php" method="post">
            <input type="hidden" name="id" value="<?= $joke['id'] ?>">
            <input onclick="return confirm('deleting joke will permenantly delete from database would you like to continue: ')" type="submit" value="Delete">
        </form>
        <form action="editjokes.php" method="post">
            <input type="hidden" name="id" value="<?= $joke['id']?>">
            <input type="submit" value="Edit">
        </form>
        </td>
    
    </tr>
    <?php endforeach; ?>
    </table>
