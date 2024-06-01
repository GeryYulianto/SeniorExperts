<?php require "../misc/header.php" ?>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Sign-up Form</h1>
        <form action="sign_up.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="idPerusahaan">ID Perusahaan</label>
                <input type="number" class="form-control" id="idPerusahaan" name="idPerusahaan" placeholder="ID Perusahaan" required>
            </div>
            <div class="form-group">
                <label for="alamat">Password</label>
                <input type="password" class="form-control" id="pass" name="pass" placeholder="Password:" required>
            </div>
            <div class="form-group">
                <label for="companyName">Nama Perusahaan</label>
                <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Nama Perusahaan" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat Perusahaan</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
            </div>
            <input type="hidden" name="form_type" value="company">
            <button type="submit" class="btn btn-primary mb-2">Sign Up!</button>
            <a href="sign_up_experts.php" class="badge bg-success py-2" style="color: white; float: right">Sign-up as Experts</a>
        </form>
    </div>
</body>
</html>
