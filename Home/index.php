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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="index.css">
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
            <a class="nav-link active" href="../Home/index.php">Beranda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../Home/jobs.php">Pekerjaan</a>
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


<!-- Hero Section -->
<div class="hero-section">
    <div class="container">
        <h1 style="margin-bottom: 0%; color: black; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Platform Pekerjaan</h1>
        <h1 style="font-family: 'Archivo', sans-serif; color: #AD0E25;"><span style="font-family:'dancing script', cursive; color: black;">untuk</span><b> SENIOR</b></h1>
        <div class="overlay">
            <p style="color: black;">Memberi kesempatan bagi para Senior Workers untuk mendapatkan pekerjaan yang sesuai</p>
        </div>   
        <br>
        <a href="../sign/role.php" class="btn btn-custom">Mulai Bergabung</a>
    </div>
</div>
<br>

<!-- About Us -->
<div class="about-us-container" id="about_us">
    <hr class="line-left">
    <div class="about-us-text">Tentang Kami</div>
    <hr class="line-right">
</div>
<div class="container">
    <div class="image-description-section">
        <div class="col-md-6">
            <img src="home_images/aboutus.jpeg" alt="Description Image">
        </div>
        <div class="col-md-6 description">
            <h2>SeniorExperts</h2>
            <p><b>SeniorExperts</b> merupakan platform yang menghubungkan perusahaan dengan para senior yang berusia di atas 55 tahun. 
                Para senior memiliki banyak pengalaman berharga, pengetahuan mendalam, serta keahlian yang dapat membantu perusahaan di berbagai bidang.
            </p>
            <a href="../Home/about_us.php" class="btn btn-custom2">Hubungi Kami</a>
        </div>
    </div>
</div>

<!-- Latest Job -->
<div class="hero-section2" id="popular_job">
    <div class="container">
        <div class="overlay2">
            <p>Kami adalah SeniorExperts</p>
        </div>   
        <h2 style="position: absolute; left: 10%;">Beberapa Pekerjaan <span style="color: #AD0E25;">Terbaru</span></h2>
        <br>
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <img class="card-img-top" src="home_images/senior_consultant.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title" style="text-align: center;">Konsultan</h4>
                        <p class="card-text" style="text-align: center; margin-bottom: 20px;">Dengan berbagai pengalaman, para senior dapat menjadi konsultan bagi perusahaan Anda</p>
                        <a href="../Home/jobs.php" class="btn btn-job">Lihat Pekerjaan Ini</a>
                    </div>
                </div>
                <br>
            </div>
            <br>
            <div class="col-xl-4">
                <div class="card">
                    <img class="card-img-top" src="home_images/senior_it_mentor.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title" style="text-align: center;">Mentor IT</h4>
                        <p class="card-text" style="text-align: center; margin-bottom: 20px;">Para profesional dapat membantu Anda dalam mengembangkan kemampuan teknis di bidang IT </p>
                        <a href="../Home/jobs.php" class="btn btn-job">Lihat Pekerjaan Ini</a>
                    </div>
                </div>
                <br>
            </div>
            <br>
            <div class="col-xl-4">
                <div class="card">
                    <img class="card-img-top" src="home_images/senior_manager.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title" style="text-align: center;">Manager</h4>
                        <p class="card-text" style="text-align: center; margin-bottom: 20px;">Manager senior memiliki pengalaman dan kemampuan untuk memimpin tim dengan baik</p>
                        <a href="../Home/jobs.php" class="btn btn-job">Lihat Pekerjaan Ini</a>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    <a href="../Home/jobs.php" class="btn btn-section">Lihat Semua Pekerjaan  <span class="material-symbols-outlined">
        arrow_forward
        </span></a>
</div>

<!-- Categories -->
<div class="about-us-container" style="margin-bottom: 4%;" id="categories">
    <hr class="line-left">
    <div class="about-us-text">Kategori Terpopuler</div>
    <hr class="line-right">
</div>
<div class="container">
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <img class="card-img-top" src="home_images/IT.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Teknologi Informasi</h4>
                    <p class="card-text" style="text-align: center; margin-bottom: 20px;">... pekerjaan tersedia</p>
                </div>
            </div>
            <br>
        </div>
        <br>
        <div class="col-xl-4">
            <div class="card">
                <img class="card-img-top" src="home_images/admin.jpeg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Bisnis</h4>
                    <p class="card-text" style="text-align: center; margin-bottom: 20px;">... pekerjaan tersedia</p>
                </div>
            </div>
            <br>
        </div>
        <br>
        <div class="col-xl-4">
            <div class="card">
                <img class="card-img-top" src="home_images/finance.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Keuangan</h4>
                    <p class="card-text" style="text-align: center; margin-bottom: 20px;">... pekerjaan tersedia</p>
                </div>
            </div>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <img class="card-img-top" src="home_images/consultant.jpeg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Konsultan</h4>
                    <p class="card-text" style="text-align: center; margin-bottom: 20px;">... pekerjaan tersedia</p>
                </div>
            </div>
            <br>
        </div>
        <br>
        <div class="col-xl-4">
            <div class="card">
                <img class="card-img-top" src="home_images/recruitment.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Perekrutan</h4>
                    <p class="card-text" style="text-align: center; margin-bottom: 20px;">... pekerjaan tersedia</p>
                </div>
            </div>
            <br>
        </div>
        <br>
        <div class="col-xl-4">
            <div class="card">
                <img class="card-img-top" src="home_images/marketing.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Pemasaran</h4>
                    <p class="card-text" style="text-align: center; margin-bottom: 20px;">... pekerjaan tersedia</p>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
<a href="../Home/courses.php" class="btn btn-section">Lihat Semua Kategori  <span class="material-symbols-outlined">
arrow_forward
</span></a>

<!-- Courses for Seniors -->
<div class="about-us-container mt-5" style="margin-bottom: 4%;" id="courses">
    <hr class="line-left">
    <div class="about-us-text">Pelatihan untuk Para Senior</div>
    <hr class="line-right">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pelatihan IT</h4>
                    <p class="card-text">Pelatihan tentang dasar-dasar IT bagi para senior.</p>
                    <a href="../Home/courses.php" class="btn btn-custom">Telusuri Lebih Lanjut</a>
                </div>
            </div>
            <br>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pelatihan Komunikasi</h4>
                    <p class="card-text">Pelatihan tentang dasar-dasar komunikasi bagi para senior.</p>
                    <a href="../Home/courses.php" class="btn btn-custom">Telusuri Lebih Lanjut</a>
                </div>
            </div>
            <br>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pelatihan Keuangan</h4>
                    <p class="card-text">Pelatihan tentang dasar-dasar keuangan bagi para senior.</p>
                    <a href="../Home/courses.php" class="btn btn-custom">Telusuri Lebih Lanjut</a>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>

<!-- Bottom Page -->
<div class="hero-section3">
    <div class="container">
        <p>Bantu Kami Membuat Perubahan pada Dunia</p>
        <h2>Melangkah Bersama Generasi Emas</h2>
    </div>
    <button onclick="document.location='../sign/role.php'"><b>Daftar Sekarang!</b></button>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="home_images/logo.png" class="logo">
            <p><strong style="font-size: 30px;">SeniorExperts</strong></p>
            <p style="font-size: 20px;">Sebuah platform yang menghubungkan para senior ahli dengan perusahaan yang membutuhkan tenaga kerja berkeahlian khusus.</p>
        </div>
        <div class="col-md-3">
            <p style="margin-top: 30px;"><strong style="font-size: 25px;">Telusuri</strong></p>
        <ul class="bottom-links">
            <li><a href="#body">Beranda</a></li>
            <li><a href="#about_us">Tentang Kami</a></li>
            <li><a href="#popular_job">Pekerjaan Terbaru</a></li>
            <li><a href="#categories">Kategori Terpopuler</a></li>
            <li><a href="#courses">Pelatihan</a></li>
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
                <li><img src="home_images/twitter.png" alt="Twitter"></li>
                <li><img src="home_images/instagram.png" alt="Instagram"></li>
            </ul>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
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
