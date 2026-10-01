<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
    <link rel="stylesheet" href="gamereviewapp.css">
</head>
<body>
    <header><h1>Internet Game Database</h1></header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="gamereview.php">Games List</a></li>
        </ul>
    </nav>
    <main>
        <?= $output ?>
    </main>
    <footer>&copy; IJDB 2026 </footer>
</body>
</html>