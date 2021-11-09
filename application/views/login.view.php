<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Aplikasi</title>
    <link rel="stylesheet" href="<?= BASE_PATH ?>/public/bootstrap/css/bootstrap.min.css">
    <style>
        body{
            background: #7868E6;
        }
        input[type=submit] {
            background-color: #7868E6;
        }
        input[type=submit]:hover {
            background-color: #5a47da;
            transition: 1s;
        }
    </style>
</head>
<body class="h-100 d-flex align-items-center">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card shadow-lg" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="<?= BASE_PATH ?>/public/img/login1.jpg" alt="login" class="img-fluid" style="border-radius: 1rem 0 0 1rem;">
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form method="POST" action="<?= BASE_PATH ?>/login/check">
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <span class="h1 fw-bold mb-0">Welcome People</span>
                                    </div>
                                    <h5 class="fw-normal mb-3 pb-3 text-muted" style="letter-spacing: 1px;">Login into your account</h5>
                                    <?php
                                        if(isset($msg)) {
                                            echo "<div class='alert alert-danger'>$msg</div>";
                                        }
                                    ?>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" autocomplete="off" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" />
                                    </div>
                                    <div class="pt-1 mb-4">
                                        <input type="submit" class="btn btn-lg btn-block text-white" value="Login">
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>