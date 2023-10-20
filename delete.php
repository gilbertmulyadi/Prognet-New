<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Delete Data</title>
</head>
<body>
<!-- Form -->
    <section id="form">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="text-center">
                        <div class="col">
                            <h1 class="h2">Delete Data</h1><br>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-50">

<?php
include 'koneksi.php';
if (isset($_GET['id_person'])) {
    $id = $_GET['id_person'];

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirm']) && $_POST['confirm'] == 'Yes') {
        // Proses penghapusan data
        $sql = "DELETE FROM tb_formulir WHERE id_person = $id";

        if ($koneksi->query($sql) === TRUE) {
            echo '<div class="alert alert-success" role="alert"> Data Sucessfully Deleted</div>';
            echo '<script>window.location = "listdataform.php";</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $koneksi->error;
        }
    } else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirm']) && $_POST['confirm'] == 'No') {
        // Jika pengguna memilih "No", arahkan kembali ke listdataform.php
        echo '<script>window.location = "listdataform.php";</script>';
    } else {
        // Menampilkan konfirmasi
        echo '<div class="alert alert-warning" role="alert"> Are you sure want to delete this data?</div>';
        echo '<form method="POST">';
        echo '<input type="submit" name="confirm" value="Yes" class="btn btn-danger"> ';
        echo '<input type="submit" name="confirm" value="No" class="btn btn-primary">';
        echo '</form>';
    }
} else {
    echo "<p>Invalid request.</p>";
}
$koneksi->close();
?>


                        </div>
                    </div>
                </div>
            </div>
    </section>

<!-- footer section start -->
<footer>
    <span>Created By <a></a>Gilbert</a>
</footer>

</body>
</html>