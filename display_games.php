<?php
// Connect to the indexed database
$db = new SQLite3('Gaming.db');

// Create the table to store game information
$db->exec('CREATE TABLE IF NOT EXISTS Games (GameName TEXT, GameType TEXT, Rating INTEGER)');

// Add 10 sample games to the table
$db->exec('INSERT INTO Games (GameName, GameType, Rating) VALUES ("Minecraft", "Adventure", 9)');
$db->exec('INSERT INTO Games (GameName, GameType, Rating) VALUES ("Grand Theft Auto V", "Action", 8)');
$db->exec('INSERT INTO Games (GameName, GameType, Rating) VALUES ("Fortnite", "Battle Royale", 7)');
$db->exec('INSERT INTO Games (GameName, GameType, Rating) VALUES ("Call of Duty: Warzone", "First-Person Shooter", 8)');
$db->exec('INSERT INTO Games (GameName, GameType, Rating) VALUES ("FIFA 21", "Sports", 7)');
$db->exec('INSERT INTO Games (GameName, GameType, Rating) VALUES ("Among Us", "Social Deduction", 8)');
$db->exec('INSERT INTO Games (GameName, GameType, Rating) VALUES ("The Legend of Zelda: Breath of the Wild", "Adventure", 10)');
$db->exec('INSERT INTO Games (GameName, GameType, Rating) VALUES ("League of Legends", "MOBA", 9)');
$db->exec('INSERT INTO Games (GameName, GameType, Rating) VALUES ("Overwatch", "First-Person Shooter", 7)');
$db->exec('INSERT INTO Games (GameName, GameType, Rating) VALUES ("Rocket League", "Sports", 8)');

// Retrieve the list of games from the database
$results = $db->query('SELECT * FROM Games');

// Display the list of games
echo "List of Games:\n";
while ($row = $results->fetchArray()) {
    echo $row['GameName'] . " (" . $row['GameType'] . ") - Rating: " . $row['Rating'] . "\n";
}

// Add a new game to the database
$db->exec('INSERT INTO Games (GameName, GameType, Rating) VALUES ("Valorant", "First-Person Shooter", 8)');

// Delete a game from the database
$db->exec('DELETE FROM Games WHERE GameName = "Fortnite"');

// Close the database connection
$db->close();
?>
