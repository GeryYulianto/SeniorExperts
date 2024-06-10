<?php require "../../misc/header.php" ?>
<link rel="stylesheet" href="../role.css">
<div class="container">
    <div class="row role-selection">
        <div class="col-md-4 col-sm-12">
            <div class="role-card-login">
                <img src="../role_images/entrepreneur.jpg" class="role-image" alt="Entrepreneur">
                <div class="role-text">Wirausahawan</div>
            </div>
            <div class="overlay">
                <p>Hai para pengusaha!</p>
                <p>Silakan isi formulir ini untuk masuk</p>
            </div>   
        </div>
        <div class="col-md-8 col-sm-12">
            <div class="login-ent-overlay">
                <h2 class="selection-title"><span class="login"><b>Masuk</b></span>
                    <span class="d-inline d-md" style="color:black"><a href="../sign_up/signup-employer.php" class="signup-false">Daftar</a></span></h2>
                <hr class="login-hr">
                <div style="text-align: left;">
                <p style="margin-bottom: 0px; font-size: 25px;">Selamat datang kembali</p>
                <p>Masuk ke halaman SeniorExperts milikmu dengan...</p>
                </div>

                <!-- ISI ACTIONNYA -->
                <form action="login.php" method="POST" enctype="multipart/form-data">
                    <div>
                        <input type="text" placeholder="ID Perusahaan" id="id_perusahaan" name="id_perusahaan" required>
                    </div>
                    <div>
                        <input type="password" placeholder="Password" id="password" name="password" required>
                    </div>
                    <input type="hidden" name="form_type" value="company">
                    <div style="text-align: center;">
                        <button type="submit" class="login-button" name="login_ent"><b>Masuk</b></button>
                    </div>
                </form>
                <div style="text-align: center;">
                    <a href="fp-entrepreneur.html" class="forgot-password-ent">Lupa kata sandi?</a>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>

<?php require "../../misc/footer.php" ?>