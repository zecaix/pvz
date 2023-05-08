<?php
if(isset($_POST['game_id'])) {
    // Get the game ID submitted via the form
    $game_id = $_POST['game_id'];

    // Create a connection to the database
    $db = new SQLite3('Gaming.db');

    // Prepare the SQL query to delete the game from the database
    $stmt = $db->prepare('DELETE FROM Games WHERE ID = :game_id');
    $stmt->bindValue(':game_id', $game_id, SQLITE3_INTEGER);

    // Execute the SQL query to delete the game from the database
    $result = $stmt->execute();

    // Close the connection to the database
    $db->close();
}
header("Location: index.html");
exit();
?>
