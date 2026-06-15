<?php

$id = $_GET['id'];

$query = "SELECT first_name, last_name
          FROM users
          WHERE user_id = '$id'";

$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)) {
    echo $row['first_name'] . " " . $row['last_name'];
}

?>
