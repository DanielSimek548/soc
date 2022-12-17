<html>
    <?php include '../parts/head.html'; ?> 

    <body>
        <?php
        include('../parts/header.php');
        ?>
        <style>
<?php
include('../css/loginCSS.php');
require_once('../scripts/database.php');
?>
        </style>
        <?php $idSkoly = isset($_GET["ids"]) ? $_GET["ids"] : ""; ?>
        <form method="post">
            <div class="container rounded bg-white mt-5 mb-5">              
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Nastavenia študenta</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6"><label class="labels">Meno</label><input type="text" class="form-control" name="name" value="" required></div>
                                <div class="col-md-6"><label class="labels">Priezvisko</label><input type="text" class="form-control" value="" name="surname" required></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Telefón</label><input type="text" class="form-control" name="mobile" value=""></div>
                                <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" name="email" value=""></div>
                                <div class="col-md-12"><label class="labels">Ulica</label><input type="text" class="form-control" name="street" value=""></div>
                                <div class="col-md-12"><label class="labels">Číslo domu</label><input type="text" class="form-control" name="aNumber" value=""></div>
                                <div class="col-md-12"><label class="labels">Mesto</label><input type="text" class="form-control" name="town" value=""></div>
                                <div class="col-md-12"><label class="labels">PSČ</label><input type="text" class="form-control" name="sNumber" value=""></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6"><label class="labels">Trieda</label><input type="text" class="form-control" name="class" value="" required></div>
                                <div class="col-md-6"><label class="labels">Skrinka</label><input type="text" class="form-control" name="locker" value="" required></div>
                            </div>
                            <div class="mt-5 text-center"><input class="btn btn-primary" type="submit" name="submit"></input></div>
                                <?php
                                if (isset($_POST['submit'])) {
                                    $name = $_POST["name"];
                                    $surname = $_POST["surname"];
                                    $mobile = $_POST["mobile"];
                                    $email = $_POST["email"];
                                    $street = $_POST["street"];
                                    $aNumber = $_POST["aNumber"];
                                    $town = $_POST["town"];
                                    $sNumber = $_POST["sNumber"];
                                    $class = $_POST["class"];
                                    $locker = $_POST["locker"];

                                    $sql = "INSERT INTO `student` (meno,priezvisko,mobil,email,ulica,cisloDomu,mesto,psc,idSkoly,trieda,skrinka) VALUES ('$name', '$surname', '$mobile', '$email', '$street', '$aNumber', '$town', '$sNumber', '$idSkoly', '$class', '$locker');";
                                    $sqlu = "SELECT * FROM `student` WHERE skrinka = '$locker'";
                                    $r_u = mysqli_query($conn, $sqlu);
                                    
                                    if (mysqli_num_rows($r_u) > 0) {
                                        echo "Skrinka sa už použiva.";
                                    }

                                    else {
                                        /* Successful */
                                        $result = mysqli_query($conn, $sql);
                                        header("Location: ../sites/main.php?id={$idSkoly}");
                                    } 
                                }
                                ?>
                        </div>
                    </div>
                
            </div>
        </form>
        <?php include('../parts/footer.php'); ?>
    </body>
</html>


