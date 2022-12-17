<?php

require_once('../scripts/database.php');
$idu = isset($_GET["user"]) ? $_GET["user"] : "";
$ids = isset($_GET["id"]) ? $_GET["id"] : "";

$sql = "SELECT * FROM student WHERE id=$idu";
$result = mysqli_query($conn, $sql);
$students = [];

while ($student = $result->fetch_assoc()) {
    array_push($students, $student);
}

