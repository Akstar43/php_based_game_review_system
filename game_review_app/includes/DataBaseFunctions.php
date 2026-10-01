<?php 
function totalgames($pdo){
    $query = $pdo->prepare('SELECT COUNT(*) FROM games');
    $query->execute();
    $row = $query->fetch();
    return $row[0];
}