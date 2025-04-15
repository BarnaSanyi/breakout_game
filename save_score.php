<?php
$db = new PDO('sqlite:scores.db');
$db->exec("CREATE TABLE IF NOT EXISTS highscores (id INTEGER PRIMARY KEY, player_name TEXT, score INTEGER, date TEXT)");
$stmt = $db->prepare("INSERT INTO highscores (player_name, score, date) VALUES (:name, :score, :date)");
$stmt->execute([
    ':name' => $_POST['player_name'],
    ':score' => (int)$_POST['score'],
    ':date' => date('Y-m-d H:i:s')
]);
?>