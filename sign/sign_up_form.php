<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Sign-up Form</h1>
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
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
