<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
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

    // Query update
    $sql = "UPDATE data_orang SET
            person_name = '$personName',
            age = '$age',
            date_of_birth = '$dateOfBirth',
            gender = '$gender',
            religion = '$religion',
            address = '$address',
            hobby = '$hobby',
            job = '$job',
            instance = '$instance',
            email = '$email',
            phone_number = '$phoneNumber',
            WHERE id = $id";

    if ($koneksi->query($sql) === TRUE) {
        echo "<script>
        alert('Data Succesfully Updated');
        window.location.href = 'detail.php?id=" . $id . "';
    </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
} else {
    echo "Invalid request.";
}

$koneksi->close();
?>