<?php

$id = $_GET['id'];

$stmt = $conn->prepare(
    "SELECT first_name, last_name
     FROM users
     WHERE user_id = ?"
);

$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();

while($row = $result->fetch_assoc()) {
    echo $row['first_name'] . " " . $row['last_name'];
}

?>
