<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vote_me";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}

$partyName = $_POST;
if (isset($partyName)) {
    $index = array_keys($partyName)[0];
	$sql = "UPDATE partylist SET vote_count=vote_count+1 WHERE id=$index";
}

if ($conn->query($sql) === TRUE) {
    header("Location:http://localhost/test/voting_portal/?message='Voting is done. Next Please!!'");
} else {
    echo "Error updating record: " . $conn->error;
}

// // Create table
// $sql = "CREATE TABLE PartyList(
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
// party_name VARCHAR(30) NOT NULL,
// vote_count INT(5)
// )";

// if ($conn->query($sql) === TRUE) {
//     echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

// // Add party
// $sql = "INSERT INTO PartyList (party_name, vote_count)
// VALUES ('BAHUJAN SAMAJ PARTY', '0')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

$conn->close();
?>