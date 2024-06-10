<?php require "../misc/header.php" ?>
<link rel="stylesheet" href="jobs.css">
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

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php require "../misc/footer.php" ?>