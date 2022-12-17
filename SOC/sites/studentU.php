<html>
    <?php include '../parts/head.html'; ?> 

    <body>
        <?php
        include('../parts/header.php');
        ?>
        <style>
<?php
include('../css/loginCSS.php');
include('../scripts/get_students.php');
?>
        </style>
        <form method="post">
            <?php foreach ($students as $student) : ?>
                <div class="container rounded bg-white mt-5 mb-5">
                    
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Nastavenia študenta</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6"><label for="name">Meno</label><input type="text" class="form-control" name="name" value="<?php echo $student["meno"] ?>" required></div>
                                <div class="col-md-6"><label for="surname">Priezvisko</label><input type="text" class="form-control" value="<?php echo $student["priezvisko"] ?>" name="surname" required></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label for="mobile">Telefón</label><input type="text" class="form-control" name="mobile" value="<?php echo $student["mobil"] ?>"></div>
                                <div class="col-md-12"><label for="email">Email</label><input type="text" class="form-control" name="email" value="<?php echo $student["email"] ?>"></div>
                                <div class="col-md-12"><label fro="street">Ulica</label><input type="text" class="form-control" name="street" value="<?php echo $student["ulica"] ?>"></div>
                                <div class="col-md-12"><label for="aNumber">Číslo domu</label><input type="text" class="form-control" name="aNumber" value="<?php echo $student["cisloDomu"] ?>"></div>
                                <div class="col-md-12"><label for="town">Mesto</label><input type="text" class="form-control" name="town" value="<?php echo $student["mesto"] ?>"></div>
                                <div class="col-md-12"><label for="sNumber">PSČ</label><input type="text" class="form-control" name="sNumber" value="<?php echo $student["psc"] ?>"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6"><label for="class">Trieda</label><input type="text" class="form-control" name="class" value="<?php echo $student["trieda"] ?>" required></div>
                                <div class="col-md-6"><label for="locker">Skrinka</label><input type="text" class="form-control" name="locker" value="<?php echo $student["skrinka"] ?>" required></div>
                            </div>
                            <div class="mt-5 text-center"><input class="btn btn-primary profile-button" type="submit" name="submit"></input><a class="btn btn-secondary" href="../sites/main.php<?php echo "?id=" . $student["idSkoly"] ?>">Spať</a></div>
                                <?php
                                $ids = isset($_GET["user"]) ? $_GET["user"] : "";
                                $id = $student["idSkoly"];
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

                                    $update = "update student set meno='$name',priezvisko='$surname',mobil='$mobile',email='$email',ulica='$street',cisloDomu='$aNumber',mesto='$town',psc='$sNumber',trieda='$class',skrinka='$locker' where idSkoly='$id' and id='$ids'";
                                    
                                    $sqlu = "SELECT * FROM `student` WHERE skrinka = '$locker'";
                                    $r_u = mysqli_query($conn, $sqlu);
                                    
                                    if (mysqli_num_rows($r_u) > 0) {
                                        echo "Skrinka sa už použiva.";
                                    }
                                    else {
                                        /* Successful */
                                        $result = mysqli_query($conn, $update);
                                        header("Location: ../sites/main.php?id={$id}");
                                    } 
                                }
                                ?>
                        </div>
                    </div>
                
            </div>
        <?php endforeach ?>
    </form>

    <?php include('../parts/footer.php'); ?>
</body>
</html>

