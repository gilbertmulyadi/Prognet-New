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
    <title>Detail Data</title>
</head>
<body>

<!-- Form -->
    <section id="form">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="text-center">
                        <div class="col">
                            <h1 class="h2">Detail Person Data</h1>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-50">
                        <?php
                        include 'koneksi.php';
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM data_orang WHERE id = $id";
                            $result = $koneksi->query($sql);
                        
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                echo '<div class="container mt-5">';
                                echo '<table class="table table-borderless table-white">';
                                echo '<tbody>';
                                
                                // Tabel untuk menampilkan data sebagai baris
                                displayDataRow("Name", $row["person_name"]);
                                displayDataRow("Age", $row["age"]);
                                displayDataRow("Date of Birth", $row["date_of_birth"]);
                                displayDataRow("Gender", $row["gender"]);
                                displayDataRow("Religion", $row["religion"]);
                                displayDataRow("Address", $row["address"]);
                                displayDataRow("Hobby", $row["hobby"]);
                                displayDataRow("Job", $row["job"]);
                                displayDataRow("Instance", $row["instance"]);
                                displayDataRow("Email", $row["email"]);
                                displayDataRow("Phone Number", $row["phone_number"]);
                        
                                echo '</tbody>';
                                echo '</table>';
                                echo '</div>';
                            } else {
                                echo "<p>Data not found.</p>";
                            }
                        } else {
                            echo "<p>Invalid request.</p>";
                        }
                        
                        function displayDataRow($label, $value) {
                            echo '<tr class="">';
                            echo '<td> <strong>' . $label . '</strong> </td>';
                            echo '<td> :' . $value . '</td>';
                            echo '</tr>';
                        }
                        
$koneksi->close();

?>
<div class="col-12 mb-3">
    <button class="w-100 btn btn-primary" onclick="location.href='listdataform.php'">Back To List</button>
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