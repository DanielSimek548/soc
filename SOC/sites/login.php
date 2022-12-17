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
        <form action="../scripts/login_scr.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                        <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
                                <form>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="uname" placeholder="Name">
                                        <label for="umane">School name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" name="passwd" placeholder="Password">
                                        <label for="passwd">Password</label>
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p><?php if(isset($_GET['msg'])) echo $_GET['msg']?></p>
            </div>
        </form>
        <?php include '../parts/footer.php'; ?>
    </body>
</html>


