<?php 
if (isset($_POST['joketext'])){
    try {
        include 'includes/DatabaseConnection.php';
        $sql = 'UPDATE joke SET joketext = :joketext WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':joketext', $_POST['joketext']);
        $stmt->bindValue(':id', $_POST['id']);
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
        $sql = 'SELECT * FROM joke WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $_POST['id']);
        $stmt->execute();
        $title = 'Edit joke';
        ob_start();
        $joke = $stmt->fetch();
        include 'templates/editjokes.html.php';
        $output = ob_get_clean();
    }
    include 'templates/layout.html.php';