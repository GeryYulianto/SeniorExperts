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
                <div class="role-card-signup-emp">
                    <img src="../role_images/employee.jpg" class="role-image" alt="Employee">
                    <div class="role-text">Senior</div>
                </div>
                <div class="overlay">
                    <p>Hai para senior!</p>
                    <p>Silakan isi formulir ini untuk mendaftar</p>
                </div>   
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="login-ent-overlay">
                    <h2 class="selection-title"><span class="d-inline d-md" style="color:black"><a href="login-employee.html" class="login-false">Masuk</a></span>
                        <span class="signup"><b>Daftar</b></span></h2>
                    <hr class="signup-hr">
                    <div style="text-align: left;">
                    <h3 style="margin-bottom: 0px; color: #0d235d;"><b>Daftarkan akunmu</b></h3>
                    <p>Silakan daftarkan akunmu untuk mendaftarkan pekerjaan.</p>
                    </div>

                    <!-- ISI ACTIONNYA -->
                    <form action="../sign_up.php" method="POST" enctype="multipart/form-data">
                        <div>
                            <input type="text" id="username" name="username" placeholder="Username" required>
                        </div>
                        <div>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
                        </div>
                        <div>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Rumah" required>
                        </div>
                        <div class="mb-2">
                            <select class="form-control" id="bidang" name="bidang" required>
                                <option value="" disabled selected>Bidang Yang Dikuasai</option>
                                <option value="IT">IT</option>
                                <option value="Finance">Finance</option>
                                <option value="Business Development">Business Development</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Consultant">Consultant</option>
                                <option value="Recruiting">Recruiting</option>
                            </select>
                        </div>
                        <div>
                            <input type="password" id="pass" name="pass" placeholder="Password:" required>
                        </div>
                        <div style="text-align: left;">
                            <label for="cv_emp" style="font-size: 18px;"><b>Upload CV (pdf)</b></label>
                            <input type="file" id="file" accept="application/pdf" name="file" required style="padding-left: 0px;">
                        </div>
                        <input type="hidden" name="form_type" value="user">
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
