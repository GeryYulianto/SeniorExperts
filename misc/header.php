<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Roles</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Montserrat:ital,wght@0,700;1,700&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="header.css">
</head>
<body id="body">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <a class="navbar-brand" href="#">SeniorExperts</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../Home/index.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Home/jobs.php">Pekerjaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Employer Side/profile_search.php">Cari Kandidat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="courses.php">Pelatihan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.php">Tentang Kami</a>
                </li>
                <?php 
                    if (isset($_SESSION['nama'])) {
                        $name = $_SESSION['nama'];
                        // Login
                        echo '<li class="nav-item">
                                <a class="nav-link" href="" rel="nofollow">
                                    <i class="fa fa-user"></i>
                                </a>
                                </li>';
                        echo '<li class="nav-item "> Welcome back, '
                                    . $name .
                             '</li>';
                        echo '<li class="nav-item">
                                <a class="nav-link" href="Sign\logout.php" rel="nofollow">
                                    <i class="fas fa-sign-in-alt"></i>
                                </a>
                            </li>';
                    } else {
                        echo '<li class="col nav-item">
                                <a class="nav-link" href="../sign/role.php" rel="nofollow">
                                    <i class="fa fa-user"></i>
                                </a>
                              </li>';
                    }
                    ?>
            </ul>
            <!-- User information -->
            <ul class="row navbar-nav">
                
                </ul>
        </div>
    </nav>
    <script>document.querySelectorAll(".nav-link").forEach((link) => {
    if (link.href === window.location.href) {
        link.classList.add("active");
        link.setAttribute("aria-current", "page");
    }
});
</script>