<?php 
try {
    include 'includes/DatabaseConnection.php';
    include 'includes/DataBaseFunctions.php';


    $sql = 'SELECT game_name, game_price, game_company_name, game_image_url, category_name, reviewer_name, reviewer_email, review_content, last_updated, replayability_rating, enjoyment_rating, plot_rating, Overall_rating FROM games INNER JOIN categories ON games.category_id = categories.id INNER JOIN reviews ON reviews.game_id = games.id INNER JOIN reviewers ON reviews.reviewer_id = reviewers.id INNER JOIN game_companies ON games.game_company_id = game_companies.id';

    $games = $pdo->query($sql);
    $title = 'Game list';
    $totalgames = totalgames($pdo);
    
    ob_start();
    include 'templates/game_container.html.php';
    $output = ob_get_clean();

}
catch(PDOException $e) {
    $title = 'An error has occured';
    $output = 'Database error' . $e->getMessage();

}
include 'templates/layout.html.php';