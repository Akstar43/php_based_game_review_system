<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <body>
    <?php if (isset($error)): ?>
        <p><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
    <?php else: ?>
        <table cellspacing="10px" border="1px">
            <?php foreach ($jokes as $joke): ?>
                <tr>
                    <td width="150px" style="text-align: center;">
                        <?= htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8') ?>
                    </td>
                    <td width="150px" style="text-align: center;">
                        <?php $displaydate = date("D d M Y", strtotime($joke['jokedate'])); ?>
                        <?= htmlspecialchars($displaydate, ENT_QUOTES, 'UTF-8') ?>
                    </td>
                    <td width="150px" style="text-align: center;">
                        <img height="100px" src="images/<?= htmlspecialchars($joke['images'], ENT_QUOTES, 'UTF-8') ?>" alt="Joke Image">
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>
    
    
</body>
</html>