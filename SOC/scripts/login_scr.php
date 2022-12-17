<?php

require_once ('../scripts/database.php');

$uname = $_POST["uname"];
$psw = $_POST["passwd"];

$sql = "SELECT id FROM login WHERE meno = '$uname'";
$result = mysqli_query($conn, $sql);
while( $rs=$result->fetch_object() )$id=$rs->id;


$sqlu = "SELECT * FROM `login` WHERE meno = '$uname'";
$sqle = "SELECT * FROM `login` WHERE heslo = '$psw'";
$r_u = mysqli_query($conn, $sqlu);
$r_p = mysqli_query($conn, $sqle);

if (mysqli_num_rows($r_u) == 1 && mysqli_num_rows($r_p) > 0) {
    echo "Login successful.";
    header("Location: ../sites/main.php?id={$id}");
}
else{
    header('Location: ../pages/login.php?msg=Chybné meno aleno heslo');
}