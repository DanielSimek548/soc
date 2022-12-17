<html>
    <?php include '../parts/head.html'; ?>
    <style>
<?php include '../css/loginCSS.html'; ?>
    </style>
    <body>
        <?php
        include '../parts/header.php';
        require_once('../scripts/database.php');
        include('../scripts/get_user.php');
        include('../scripts/main_scr.php');
        ?>

        <section>
            <?php foreach ($logs as $log) : ?>
                <h1><?php echo $log["meno"] ?></h1>
                <div class="tbl-header">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <form method="post">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                <input class="btn btn-primary" type="submit" name="Submit"></input>
                            </div>
                        </form>

                        <thead>
                            <tr>
                                <th>Meno</th>
                                <th>Priezvisko</th>
                                <th>Trieda</th>
                                <th>Skrinka</th>
                                <th>Upravit</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="tbl-content">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <?php
                            $id = isset($_GET["id"]) ? $_GET["id"] : "";
                            $users = [];
                            if (isset($_POST['Submit'])) {
                                $search = mysqli_real_escape_string($conn, $_POST['search']);
                                $sqls = "SELECT * FROM student WHERE `meno` LIKE '%$search%' OR `priezvisko` LIKE '%$search%' OR `trieda` LIKE '%$search%' OR `skrinka` LIKE '%$search%' AND idSkoly=$id;";
                                $results = mysqli_query($conn, $sqls);
                                $queryResult = mysqli_num_rows($results);

                                if ($queryResult > 0) {
                                    // Loop through the result set and display the data
                                    while ($user = mysqli_fetch_array($results)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $user["meno"] ?></td>
                                            <td><?php echo $user["priezvisko"] ?></td>
                                            <td><?php echo $user["trieda"] ?></td>
                                            <td><?php echo $user["skrinka"] ?></td>
                                            <td><a class="btn btn-primary" href="../sites/studentU.php<?php echo "?user=" . $user["id"]; ?>" >Upraviť</a></td>
                                        </tr><?php
                                    }
                                }else{
                                    echo "No results";
                                }
                            } 
                            ?>
                        </tbody>
                    </table>
                </div>
                <div>
                    <a class="btn btn-success" href="../sites/student.php<?php echo "?ids=" . $log["id"]; ?>" >Pridať</a>
                </div>
            <?php endforeach ?>
        </section>
        <?php include '../parts/footer.php'; ?>
    </body>
</html>