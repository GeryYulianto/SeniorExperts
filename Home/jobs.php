<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal for Aging Population</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Montserrat:ital,wght@0,700;1,700&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="jobs.css">
</head>
<body id="body">
    
<!-- Navbar -->
<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
    <a class="navbar-brand" href="../Home/index.php"><img src="home_images/Logo_white.png" style="max-width: 50px; margin-right: 15px;">SeniorExperts</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="../Home/index.php">Beranda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#body">Pekerjaan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../Employer Side/profile_search.php">Cari Kandidat</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../Home/courses.php">Pelatihan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../Home/about_us.php">Hubungi Kami</a>
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
    </div>
</nav>

<!-- All Jobs -->
<div class="all-jobs" style="margin-bottom: 4%;">
    <hr class="line-left">
    <div>Seluruh Pekerjaan</div>
    <hr class="line-right">
</div>

<!-- Full Time Job -->
<a href="#">        <!-- Link ke mana? -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="div-logo col-lg-8">
                    <img src="home_images/logo.png" class="logo" alt="Company Logo">
                    <div class="text-container">
                        <p class="job-name">Nama Pekerjaan</p>    <!-- Ganti dengan nama pekerjaannya -->
                        <p class="job-location">Lokasi</p>  <!-- Ganti dengan lokasi pekerjaannya -->
                    </div>
                </div>
                <div class="col-lg-1">
                </div>
                <div class="price col-lg-3">
                    <div class="container" style="margin-top: 2%;">
                        <div class="overlay-price">
                            <p class="price-price">Rp 10.000,00</p> <!-- Silakan diganti -->
                            <p class="price-time">per bulan</p>     <!-- Silakan diganti -->
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="display: flex;">
            <div class="overlay full-time">
                <p><span class="material-symbols-outlined" style="color: #269577;">schedule</span>
                    Penuh Waktu</p>
            </div>
            <div class="overlay schedule">
                <p><span class="material-symbols-outlined">calendar_month</span>
                ... hari / minggu</p>    <!-- Nanti diganti -->
            </div>
            <div style="display: flex; margin-left: auto; margin-right: 3%;">
                <p class="uploaded">Diunggah <span class="uploaded-date">02/06/2024</span></p> 
            </div>
        </div>
    </div>
</a>


<!-- Part Time Job -->
<a href="#">        <!-- Link ke mana? -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="div-logo col-lg-8">
                    <img src="home_images/logo.png" class="logo" alt="Company Logo">
                    <div class="text-container">
                        <p class="job-name">Nama Pekerjaan</p>    <!-- Ganti dengan nama pekerjaannya -->
                        <p class="job-location">Lokasi</p>  <!-- Ganti dengan lokasi pekerjaannya -->
                    </div>
                </div>
                <div class="col-lg-1">
                </div>
                <div class="price col-lg-3">
                    <div class="container" style="margin-top: 2%;">
                        <div class="overlay-price">
                            <p class="price-price">Rp 10.000,00</p> <!-- Silakan diganti -->
                            <p class="price-time">per bulan</p>     <!-- Silakan diganti -->
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="display: flex;">
            <div class="overlay part-time">
                <p><span class="material-symbols-outlined" style="color: #f5aa27;">schedule</span>
                    Paruh Waktu</p>
            </div>
            <div class="overlay schedule">
                <p><span class="material-symbols-outlined">calendar_month</span>
                ... hari / minggu</p>    <!-- Nanti diganti -->
            </div>
            <div style="display: flex; margin-left: auto; margin-right: 3%;">
                <p class="uploaded">Diunggah <span class="uploaded-date">02/06/2024</span></p> 
            </div>
        </div>
    </div>
</a>

<!-- Bottom Section -->
<div style="background-color: rgba(0, 0, 0, 0.9); color:white; margin-bottom: 1px">
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6 mt-3">
                <img src="home_images/Logo_white.png" class="bottom-logo">
                <p style="margin-bottom: 0px;"><strong style="font-size: 30px;">SeniorExperts</strong></p>
                <p style="font-size: 17px;">Sebuah platform yang menghubungkan para senior ahli dengan perusahaan yang membutuhkan tenaga kerja berkeahlian khusus.</p>
            </div>
            <div class="col-md-3">
                <p style="margin-top: 30px;"><strong style="font-size: 25px;">Telusuri</strong></p>
            <ul class="bottom-links">
                <li><a href="../Home/index.php">Beranda</a></li>
                <li><a href="../Home/jobs.php">Pekerjaan</a></li>
                <li><a href="../Home/courses.php">Pelatihan</a></li>
                <li><a href="../Home/about_us.php">Hubungi Kami</a></li>
                <li><a href="../sign/role.php">Daftar</a></li>
            </ul>            
            </div>
            <div class="col-md-3">
                <p style="margin-top: 30px;"><strong style="font-size: 25px;">Hubungi Kami</strong></p>
                <p class="contact-us-p"><span class="material-symbols-outlined" style="font-size: 2em; margin-right: 5px;">
                    pin_drop</span>Calvin Institute of Technology</p>  
                <p class="contact-us-p"><span class="material-symbols-outlined" style="font-size: 2em; margin-right: 5px;">
                    mail</span>admin@gmail.com</p>        
                <ul class="social-icons">
                    <li><img src="home_images/facebook.png" alt="Facebook"></li>
                    <li><img src="home_images/twitter2.png" alt="Twitter"></li>
                    <li><img src="home_images/instagram.png" alt="Instagram"></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer style="background-color: rgba(0, 0, 0, 0.9); color:white;">
    <div class="container">
        <p>&copy; 2024 SeniorExperts. All Rights Reserved.</p>
    </div>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
