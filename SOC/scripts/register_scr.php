<?php
    require_once ('../scripts/database.php');
        
        $hasPasswordCertainLength = true;
        $hasPasswordAtLeastOneNumber = true;
        $passwordAreSame = true;
        $uuname = false;
        
        $uname = $_POST["schname"];
        $psw = $_POST["password"];
        $psw_repaet = $_POST["password-repaet"];
        
        $sql = "INSERT INTO `login` (meno, heslo) VALUES ('$uname', '$psw');";
        $sqlu = "SELECT * FROM `login` WHERE meno = '$uname'";
        $r_u = mysqli_query($conn, $sqlu);
        
        if(mysqli_num_rows($r_u) > 0){
            $uuname = true;
            echo "Username already exist.";
        }
        
        if(strlen($psw) >= 5){
            if(preg_match('@[0-9]@', $psw)){
                if ($psw == $psw_repaet){
                    //password_hash($psw, PASSWORD_BCRYPT);
                    header('Location: ../sites/login.php');
                    if ($conn->query($sql) === TRUE){
                        echo "New record created seccessfully";
                    } 
                    else{
                        echo "Error: " . $sgl . "<br>" . $conn->error;
                    }
                }
                else{
                    echo "Passwords don't match.";
                }
            }
            else{
                echo "Your password must contain a number.";
            }
        }
        else{
            echo "Password is too short. Your password must be at least 5 characters long..";
        }
        
        $conn->close();
