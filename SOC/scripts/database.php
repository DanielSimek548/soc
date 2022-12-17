<?php
$servername = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'soc';
        
        $conn = new mysqli($servername, $username, $password, $database);
        
        if ($conn->connect_error){
            die("Connection faild: " . $conn->connect_error);
        }
        //echo "Connected successfully";