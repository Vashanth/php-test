<?php

include("connect.php");

$sql2 = "CREATE TABLE tab1 (
name Varchar(30),
Email Varchar(50) UNIQUE,
Phone Varchar(20)
)";
if ($conn->query($sql2) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
				
?>