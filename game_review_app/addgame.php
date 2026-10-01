<?php 
if (isset($_POST['game_name'])){
    try {
        include 'includes/DatabaseConnection.php';
        $sql = 'INSERT INTO games SET game_name = :game_name, game_price = :game_price, category_id = :category_id, game_company_id = :game_company_id, game_image_url = 1';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':game_name', $_POST['game_name']);
        $stmt->bindValue(':game_price', $_POST['game_price']);
        $stmt->bindValue(':category_id', $_POST['categories']);
        $stmt->bindValue(':game_company_id', $_POST['game_companies']);
        $stmt->execute();
        header('location: gamereview.php');
    }
    catch(PDOException $e) {
        $title = 'joke text could not be updated';
        $output = 'Database error' . $e->getMessage();
    }

}
    else {
        include 'includes/DatabaseConnection.php';
        $title = 'Add new Game';
        $sql_c = 'SELECT * FROM categories';
        $sql_gc = 'SELECT * FROM game_companies';
        $categories = $pdo->query($sql_c);
        $game_companies = $pdo->query($sql_gc);
        ob_start();
        include 'templates/addgame.html.php';
        $output = ob_get_clean();
    }
    include 'templates/layout.html.php';