<?php
if(isset($_POST['game_name']) && isset($_POST['game_type']) && isset($_POST['game_rating'])) {
    // Get the values submitted via the form
    $game_name = $_POST['game_name'];
    $game_type = $_POST['game_type'];
    $game_rating = $_POST['game_rating'];

    // Create a connection to the database
    $db = new SQLite3('Gaming.db');

    // Prepare the SQL query to insert a new game into the database
    $stmt = $db->prepare('INSERT INTO Games (GameName, GameType, Rating) VALUES (:game_name, :game_type, :game_rating)');
    $stmt->bindValue(':game_name', $game_name, SQLITE3_TEXT);
    $stmt->bindValue(':game_type', $game_type, SQLITE3_TEXT);
    $stmt->bindValue(':game_rating', $game_rating, SQLITE3_INTEGER);

    // Execute the SQL query to insert the new game into the database
    $result = $stmt->execute();

    // Close the connection to the database
    $db->close();
}
header("Location: index.html");
exit();
?>
