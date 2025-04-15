<?php
header('Content-Type: application/json');
$db = new PDO('sqlite:scores.db');
$stmt = $db->query("SELECT player_name, score, date FROM highscores ORDER BY score DESC LIMIT 10");
echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>