<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> 
</head>
<body>
    <!-- Header... -->

    <!-- Search Filter-->
    <form id="categoryForm" action="" method="post" class="my-2">
        <select name="category" onchange="document.getElementById('categoryForm').submit();">
            <option value="all" <?php if(isset($_POST['category']) && $_POST['category'] == 'all') echo 'selected'; ?>>Semua</option>
            <option value="IT" <?php if(isset($_POST['category']) && $_POST['category'] == 'IT') echo 'selected'; ?>>IT</option>
            <option value="Finance" <?php if(isset($_POST['category']) && $_POST['category'] == 'Finance') echo 'selected'; ?>>Finance</option>
            <option value="Business Development" <?php if(isset($_POST['category']) && $_POST['category'] == 'Business Development') echo 'selected'; ?>>Business Development</option>
            <option value="Marketing" <?php if(isset($_POST['category']) && $_POST['category'] == 'Marketing') echo 'selected'; ?>>Marketing</option>
            <option value="Consultant" <?php if(isset($_POST['category']) && $_POST['category'] == 'Consultant') echo 'selected'; ?>>Consultant</option>
            <option value="Recruiting" <?php if(isset($_POST['category']) && $_POST['category'] == 'Recruiting') echo 'selected'; ?>>Recruiting</option>
        </select>
    </form>


    <!-- Result -->
    <?php
    require "../connect_db.php";
    $sql = "SELECT * FROM experts";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $category = $_POST['category'];
        if ($category == "all") {
            $sql = "SELECT * FROM experts";
        } else {
            $sql = "SELECT * FROM experts WHERE bidang_experts='$category'";
        }
        
    }

    $res = $conn->query($sql);

    echo '<div class="container">';

    $counter = 0;
    
    while ($row = $res->fetch_assoc()) {
        if ($counter % 3 == 0) {
            
            echo '<div class="row">';
        }
        
        echo '<div class="col-md-4 mb-4">';
        echo '<div class="card">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">'. $row["nama_experts"]. '</h5>';
        echo '<h6 class="card-subtitle mb-2 text-muted">'. $row["bidang_experts"] .'</h6>';
        echo '<p class="card-text">'. $row["alamat_experts"] . '</p>';
        echo '<a href="'.$row["CV_experts"].'" target="_blank" class="btn btn-primary">Lihat CV</a>'; // Use Bootstrap button class
        echo '</div>'; // card-body
        echo '</div>'; // card
        echo '</div>'; // col-md-4
        
        $counter++;
    
        if ($counter % 3 == 0) {
            
            echo '</div>';
        }
    }
    
    echo '</div>';
    


    $conn->close();
?>

</body>
</html>