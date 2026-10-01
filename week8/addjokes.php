<?php 
if (isset($_POST['joketext'])){
    try {
        include 'includes/DatabaseConnection.php';
        $sql = 'INSERT INTO joke SET joketext = :joketext, jokedate = CURDATE(), authorid = :authorid, category_id = :category_id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':authorid', $_POST['authors']);
        $stmt->bindValue(':category_id', $_POST['categories']);

        $stmt->bindValue(':joketext', $_POST['joketext']);
        $stmt->execute();
        header('location: jokes.php');
    }
    catch(PDOException $e) {
        $title = 'joke text could not be updated';
        $output = 'Database error' . $e->getMessage();
    }

}
    else {
        include 'includes/DatabaseConnection.php';
        $title = 'Add new joke';
        $sql_a = 'SELECT * FROM author';
        $sql_c = 'SELECT * FROM category';
        $authors = $pdo->query($sql_a);
        $categories = $pdo->query($sql_c);
        ob_start();
        include 'templates/addjokes.html.php';
        $output = ob_get_clean();
    }
    include 'templates/layout.html.php';