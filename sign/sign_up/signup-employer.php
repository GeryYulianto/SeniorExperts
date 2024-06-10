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
    <link rel="stylesheet" href="../role.css">
</head>
<body id="body">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <a class="navbar-brand" href="#body">SeniorExperts</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jobs.html">Pekerjaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="candidates.html">Cari Kandidat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="courses.html">Pelatihan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.html">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="role.html">Masuk</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row role-selection">
            <div class="col-md-4 col-sm-12">
                <div class="role-card-signup-ent">
                    <img src="../role_images/entrepreneur.jpg" class="role-image" alt="Entrepreneur">
                    <div class="role-text">Wirausahawan</div>
                </div>
                <div class="overlay">
                    <p>Hai para pengusaha!</p>
                    <p>Silakan isi formulir ini untuk mendaftar</p>
                </div>   
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="login-ent-overlay">
                    <h2 class="selection-title"><span class="d-inline d-md" style="color:black"><a href="login-entrepreneur.html" class="login-false">Masuk</a></span>
                        <span class="signup"><b>Daftar</b></span></h2>
                    <hr class="signup-hr">
                    <div style="text-align: left;">
                    <h3 style="margin-bottom: 0px; color: #0d235d;"><b>Daftarkan akunmu</b></h3>
                    <p>Silakan daftarkan akunmu untuk menawarkan pekerjaan dan mengelolanya.</p>
                    </div>

                    <!-- ISI ACTIONNYA -->
                    <form action="../sign_up.php" method="POST" enctype="multipart/form-data">
                        <div>
                            <input type="number" class="form-control" id="idPerusahaan" name="idPerusahaan" placeholder="ID Perusahaan" required>
                        </div>
                        <div>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Perusahaan" required>
                        </div>
                        <div>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                        </div>
                        <div>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password:" required>
                        </div>
                        <input type="hidden" name="form_type" value="company">
                        <div style="text-align: center;">
                            <button type="submit" class="login-button" name="login_ent"><b>Daftar</b></button>
                        </div>
                    </form>
                </div>
                <br>
            </div>
        </div>
    </div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
