<?php require "../../misc/header.php" ?>
<link rel="stylesheet" href="../sign.css">

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
                    <span class="d-inline d-md" style="color:black"><a href="signup-entrepreneur.html" class="signup-false">Daftar</a></span></h2>
                <hr class="login-hr">
                <div style="text-align: left;">
                <p style="margin-bottom: 0px; font-size: 25px;">Selamat datang kembali</p>
                <p>Silakan ubah password Anda di sini</p>
                </div>

                <!-- ISI ACTIONNYA -->
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div>
                        <input type="email" placeholder="Masukkan email anda*" id="email_ent" name="email_ent" required>
                    </div>
                    <div>
                        <input type="password" placeholder="Masukkan password baru*" id="pw_ent" name="pw_ent" required>
                    </div>
                    <div style="text-align: center;">
                        <button type="submit" class="login-button" name="login_ent"><b>Ubah Password</b></button>
                    </div>
                </form>
                <div style="text-align: center;">
                    <a href="login-entrepreneur.html" class="forgot-password-ent">Kembali masuk</a>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>

<?php require "../../misc/footer.php" ?>