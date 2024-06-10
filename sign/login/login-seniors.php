<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Roles</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Montserrat:ital,wght@0,700;1,700&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../misc/header.css">
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
                    <a class="nav-link" href="../../Home/index.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jobs.html">Pekerjaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../Employer Side/profile_search.php">Cari Kandidat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="courses.html">Pelatihan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.html">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../role.php">Masuk</a>
                </li>
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
<link rel="stylesheet" href="../role.css">
<div class="container">
    <div class="row role-selection">
        <div class="col-md-4 col-sm-12">
            <div class="role-card-login">
                <img src="../role_images/employee.jpg" class="role-image" alt="Employee">
                <div class="role-text">Senior</div>
            </div>
            <div class="overlay">
                <p>Hai para Senior!</p>
                <p>Silakan isi formulir ini untuk masuk</p>
            </div>   
        </div>
        <div class="col-md-8 col-sm-12">
            <div class="login-ent-overlay">
                <h2 class="selection-title"><span class="login"><b>Masuk</b></span>
                    <span class="d-inline d-md" style="color:black"><a href="../sign_up/signup-seniors.php" class="signup-false">Daftar</a></span></h2>
                <hr class="login-hr">
                <div style="text-align: left;">
                <p style="margin-bottom: 0px; font-size: 25px;">Selamat datang kembali</p>
                <p>Masuk ke halaman SeniorExperts milikmu dengan...</p>
                </div>

                <!-- ISI ACTIONNYA -->
                <form action="login.php" method="POST" enctype="multipart/form-data">
                    <div>
                        <input type="text" placeholder="Username" id="username" name="username" required>
                    </div>
                    <div>
                        <input type="password" placeholder="Password" id="password" name="password" required>
                    </div>
                    <input type="hidden" name="form_type" value="user">
                    <div style="text-align: center;">
                        <button type="submit" class="login-button" name="login_ent"><b>Masuk</b></button>
                    </div>
                </form>
                <div style="text-align: center;">
                    <a href="fp-employee.html" class="forgot-password-ent">Lupa kata sandi?</a>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>


<?php require "../../misc/footer.php" ?>