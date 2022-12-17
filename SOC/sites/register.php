<html>
    <?php include '../parts/head.html'; ?>
    <style>
        <?php include '../css/loginCSS.html'; ?>
    </style>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-md">
                    <a class="navbar-brand">DESAS - Digital student evidence</a>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../sites/login.php">Sing in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../sites/register.php">Sing up</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <h5 class="card-title text-center mb-5 fw-light fs-5">Sign Up</h5>
                            <form action="../scripts/register_scr.php" method="post">
                                <div class="form-floating mb-3">
                                    <input type="text" name="schname" class="form-control" placeholder="School Name">
                                    <label for="schname">School name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    <label for="password">Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" name="password-repaet" class="form-control" placeholder="Password repaet">
                                    <label for="password-repaet">Password repaet</label>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include '../parts/footer.php'; ?>
    </body>
</html>



