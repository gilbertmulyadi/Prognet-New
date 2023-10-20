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
    <title>Input Data</title>
</head>
<body>

<!-- Form -->
    <section id="form">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="text-center">
                        <div class="col">
                            <h1 class="h2">Student Response Data Form</h1><br>
                            <h2 class="h2">Data Saved Successfully</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-50">
                        <?php
                        include 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $personName = isset($_POST["Name"]) ? $_POST["Name"] : "";
    $age = isset($_POST["Age"]) ? $_POST["Age"] : "";
    $dateOfBirth = isset($_POST["DateOfBirth"]) ? $_POST["DateOfBirth"] : "";
    $gender = isset($_POST["Gender"]) ? $_POST["Gender"] : "";
    $religion = isset($_POST["Religion"]) ? $_POST["Religion"] : "";
    $address = isset($_POST["Address"]) ? $_POST["Address"] : "";
    $hobby = isset($_POST["Hobby"]) ? $_POST["Hobby"] : "";
    $job = isset($_POST["Job"]) ? $_POST["Job"] : "";
    $instance = isset($_POST["Instance"]) ? $_POST["Instance"] : "";
    $email = isset($_POST["Email"]) ?  $_POST["Email"] : "";
    $phoneNumber = isset($_POST["PhoneNumber"]) ? $_POST["PhoneNumber"] : "";
}


$sql = "INSERT INTO data_orang (person_name, age, date_of_birth, gender, religion, address, hobby, job, instance, email, phone_number)
        VALUES ('$personName', '$age', '$dateOfBirth', '$gender', '$religion', '$address', '$hobby', '$job', '$instance', '$email', '$phoneNumber')";

if ($koneksi->query($sql) === TRUE) {
    echo '<div class="container mt-5">';
    echo '<table class="table table-borderless table-white">';
    echo '<tbody>';
    
    // Tabel untuk menampilkan data
    displayDataRow("Name", $personName);
    displayDataRow("Age", $age);
    displayDataRow("Date of Birth", $dateOfBirth);
    displayDataRow("Gender", $gender);
    displayDataRow("Religion", $religion);
    displayDataRow("Address", $address);
    displayDataRow("Hobby", $hobby);
    displayDataRow("Job", $job);
    displayDataRow("Instance", $instance);
    displayDataRow("Email", $email);
    displayDataRow("Phone Number", $phoneNumber);

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
} else {
    echo "<p>No data submitted.</p>";
    echo "Error: " . $sql . "<br>" . $koneksi->error;
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
    <button onclick="location.href='listdataform.php'">Back</button>
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