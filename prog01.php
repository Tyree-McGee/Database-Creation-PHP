<?php

$user = 'root';

$pass = '';

$db = 'database_1';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

// create tables
$create_table_basketball = "CREATE TABLE basketball(
name VARCHAR(20),
fun_fact VARCHAR(255)
)";

$create_table_celebrity = "CREATE TABLE celebrity(
name VARCHAR(20),
famous_movie VARCHAR(255)
)";

$create_table_rappers = "CREATE TABLE rappers(
name VARCHAR(20),
famous_song VARCHAR(255)
)";

$db->query($create_table_basketball); 

$db->query($create_table_celebrity);

$db->query($create_table_rappers);

// insert data
$insert_1 = "INSERT INTO basketball(name, fun_fact)
VALUES('Michael Jordan', 'Michael Jordan has 6 rings'),
('Dirk Nowitzki', 'Dirk is 6th all time in scoring')";

$insert_2 = "INSERT INTO celebrity(name, famous_movie)
VALUES('Will Smith', 'Enemy of the State'),
('Samuel L. Jackson', 'Pulp Fiction')";

$insert_3 = "INSERT INTO rappers(name, famous_song)
VALUES('Snoop Dogg', 'Juice and Gin'),
('Notorious BIG', 'Big Poppa')";

$db->query($insert_1);

$db->query($insert_2);

$db->query($insert_3);


// Print to screen
$sql1 = "SELECT * FROM basketball";
$r1 = $db->query($sql1);
$sql2 = "SELECT * FROM celebrity";
$r2 = $db->query($sql2);
$sql3 = "SELECT * FROM rappers";
$r3 = $db->query($sql3);

echo "<table border='1'>";
echo "<tr><td>Name</td><td>Fun Fact</td><td>";
while($row = $r1->fetch_assoc()){
	echo "<tr><td>{$row['name']}</td><td>{$row['fun_fact']}</td></tr>";
}
echo "</table>\n\n";

echo "<table border='1'>";
echo "<tr><td>Name</td><td>Famous Movie</td><td>";
while($row = $r2->fetch_assoc()){
	echo "<tr><td>{$row['name']}</td><td>{$row['famous_movie']}</td></tr>";
}
echo "</table>\n\n";

echo "<table border='1'>";
echo "<tr><td>Name</td><td>Famous Song</td><td>";
while($row = $r3->fetch_assoc()){
	echo "<tr><td>{$row['name']}</td><td>{$row['famous_song']}</td></tr>";
}
echo "</table>\n\n";



?> 