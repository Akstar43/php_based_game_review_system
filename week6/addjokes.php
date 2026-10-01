<?php 
if (isset($_POST['joketext'])){
    try {
        include 'includes/DatabaseConnection.php';
        $sql = 'INSERT INTO joke SET joketext = :joketext, jokedate = CURDATE()';
        $stmt = $pdo->prepare($sql);
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
        $title = 'Add new joke';
        ob_start();
        include 'templates/addjokes.html.php';
        $output = ob_get_clean();
    }
    include 'templates/layout.html.php';