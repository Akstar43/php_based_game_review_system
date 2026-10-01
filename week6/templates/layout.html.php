<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
    <link rel="stylesheet" href="jokes.css">
</head>
<body>
    <header><h1>Internet Joke Database</h1></header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="jokes.php">Jokes List</a></li>
            <li><a href="addjokes.php">Add new Joke</a></li>
        </ul>
    </nav>
    <main>
        <?= $output ?>
    </main>
    <footer>&copy; IJDB 2026 </footer>
</body>
</html>