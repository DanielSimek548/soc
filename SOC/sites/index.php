<html>
    <?php include '../parts/head.html';?>
    
    <style>
        <?php include '../css/loginCSS.html'; ?>
    </style>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-md">
                    <a class="navbar-brand" href="../sites/index.php">DESAS - Digital student evidence</a>
                </div>
            </nav>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">To continue: </h5>
                            <form>
                                <div class="d-grid">
                                    <a class="btn btn-primary btn-login text-uppercase fw-bold" href="../sites/login.php" >Sign in</a>
                                </div>
                                <div>
                                    <p class="card-title text-center fw-light">or</p>
                                </div>
                                <div class="d-grid">
                                    <a class="btn btn-primary btn-login text-uppercase fw-bold" href="../sites/register.php" >Sign up</a>
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

