<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <title>List Data</title>
</head>
<body>

<!-- Form -->
    <section id="form">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="text-center">
                        <div class="col">
                            <h1 class="h2">List Data</h1><br>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-50">
                        <?php
include 'koneksi.php';
$sql = "SELECT id_person, person_name, age FROM data_orang";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $tableHtml = '<table class="table table-white" >';
    $tableHtml .= '<thead>';
    $tableHtml .= '<tr><th <th class="text-center">No</th><th class="text-center">Name</th><th class="text-center">Age</th><th class="text-center">Action</th></tr>';
    $tableHtml .= '</thead>';
    $tableHtml .= '<tbody>';
    $counter = 1;
    while ($row = $result->fetch_assoc()) {
        $tableHtml .= '<tr>';
        $tableHtml .= '<td class="text-center">' . $counter . '</td>';
        $tableHtml .= '<td class="text-center">' . $row['person_name'] . '</td>';
        $tableHtml .= '<td class="text-center">' . $row['age'] . '</td>';
        $tableHtml .= '<td class="text-center">
<a href="detail.php?id=' . $row['id'] . '" class="btn btn-primary btn-sm" role="button">Detail</a>
<a href="edit.php?id=' . $row['id'] . '" class="btn btn-success btn-sm" role="button">Edit</a>
<a href="delete.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm" role="button">Delete</a>
                      </td>';
        $tableHtml .= '</tr>';
        $counter++;
    }
    $tableHtml .= '</tbody>';
    $tableHtml .= '</table>';
} else {
    $tableHtml = "<p>No data available.</p>";
}
$koneksi->close();
?>

<!-- Tampilkan tabel dan tombol dalam HTML -->
<div class="container mt-4">
    <?php echo $tableHtml; ?>
</div>
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