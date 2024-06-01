<?php require "../../misc/header.php" ?>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Job Posting Form</h1>
        <form action="sign_up.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="alamat">Password</label>
                <input type="password" class="form-control" id="pass" name="pass" placeholder="Password:" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
            </div>
            <div class="form-group">
                <label for="bidang">Bidang</label>
                <select class="form-control" id="bidang" name="bidang" required>
                    <option value="IT">IT</option>
                    <option value="Finance">Finance</option>
                    <option value="Business Development">Business Development</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Consultant">Consultant</option>
                    <option value="Recruiting">Recruiting</option>
                </select>
            </div>
            <div class="form-group">
                <label for="file">Upload PDF</label>
                <input type="file" class="form-control-file" id="file" accept="application/pdf" name="file" required>
            </div>
            <input type="hidden" name="form_type" value="user">
            <button type="submit" class="btn btn-primary mb-2">Upload</button>
            <a href="sign_up_admin.php" class="badge bg-success py-2" style="color: white; float: right">Sign-up as Employer</a>
        </form>
    </div>
</body>
</html>
