<?php
require_once('../scripts/database.php');
$id = isset($_GET["id"]) ? $_GET["id"] : "";
$sql = "SELECT * FROM login WHERE id=$id";
$result = $conn->query($sql);
$logs = [];

while($log = $result->fetch_assoc()){
    array_push($logs, $log);
}
?>