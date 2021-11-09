<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Manajemen Pegawai</title>
    <link rel="stylesheet" href="<?= BASE_PATH?>/public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_PATH?>/public/bootstrap/ionic/font/css/open-iconic-bootstrap.min.css">

    <script src="<?= BASE_PATH ?>/public/js/jquery-3.6.0.min.js"></script>
    <style>
        .bg-purple {
            background-color: #7868E6;
        }
        .nav-link:hover{
            background-color: #5a47da;
            transition: 1s;
        }
    </style>
</head>
<body class="h-100">
    <nav class="navbar navbar-expand-sm navbar-dark sticky-top bg-purple">
        <a href="#" class="navbar-brand">Manajemen Pegawai</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <nav class="collapse navbar-collapse" id="sidebar">
            <ul class="navbar-nav d-sm-none">
                <li class="nav-item">
                    <a href="<?= BASE_PATH ?>/dashboard" class="nav-link text-white">
                        <i class="oi oi-dashboard"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= BASE_PATH ?>/pegawai" class="nav-link text-white">
                        <i class="oi oi-person"></i> Data Pegawai
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= BASE_PATH ?>/jabatan" class="nav-link text-white">
                        <i class="oi oi-sort-descending"></i> Data Jabatan
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= BASE_PATH ?>/login/logout" class="nav-link text-white">
                        <i class="oi oi-account-logout"></i> Keluar
                    </a>
                </li>
            </ul>
        </nav>
    </nav>

    <div class="container-fluid h-100">
        <div class="row h-100">
            <nav class="col-md-2 col-sm-3 bg-dark h-100 p-0 position-fixed d-none d-sm-block">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-dark mt-1">
                        <a href="<?= BASE_PATH ?>/dashboard" class="nav-link bg-purple text-white rounded">
                            <i class="mr-2 oi oi-dashboard text-warning"></i> Dashboard
                        </a>
                    </li>
                    <li class="list-group-item bg-dark">
                        <a href="<?= BASE_PATH ?>/pegawai" class="nav-link bg-purple text-white rounded">
                            <i class="mr-2 oi oi-person text-info"></i> Data Pegawai
                        </a>
                    </li>
                    <li class="list-group-item bg-dark">
                        <a href="<?= BASE_PATH ?>/jabatan" class="nav-link bg-purple text-white rounded">
                            <i class="mr-2 oi oi-sort-descending text-success"></i> Data Jabatan
                        </a>
                    </li>
                    <li class="list-group-item bg-dark">
                        <a href="<?= BASE_PATH ?>/login/logout" class="nav-link bg-purple text-white rounded">
                            <i class="mr-2 oi oi-account-logout text-danger"></i> Keluar
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="col-md-10 col-sm-9 offset-md-2 offset-sm-3 mb-3">
                <section>
                    <?php
                        $view = new View($viewName);
                        $view->bind('data', $data);
                        $view->render();
                    ?>
                </section>
            </div>
        </div>
    </div>
    <script src="<?= BASE_PATH ?>/public/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
