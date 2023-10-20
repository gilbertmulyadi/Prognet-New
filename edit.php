<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <title>Edit Data</title>
</head>
<body>

<!-- Form -->
    <section id="form">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="text-center">
                        <div class="col">
                            <h1 class="h2">Edit</h1><br>
                        </div>
                    </div>
                    <?php
                        include 'koneksi.php';

                        if (isset($_GET['id_person'])) {
                            $id = $_GET['id_person'];
                            $sql = "SELECT * FROM data_orang WHERE id_person = $id";
                            $result = $koneksi->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                        ?>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-50">
                            <form method="post" action="update.php" >
                                <div class="col-12 mb-3">
                                    <div class="alert alert-info alert-dismissible fade show d-none my-alert" role="alert">
                                        <strong>Your Message Has Been Successfully Submitted!</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <input type="hidden" name="id_person" value="<?php echo $row['id_person']; ?>">
                                <div class="col-12 mb-3">
                                    <label for="inputPersonName" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="Name" id="inputPersonName" value="<?php echo $row['person_name']; ?>" required/>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputAge" class="form-label">Age</label>
                                    <input type="text" class="form-control" name="Age" id="inputAge" value="<?php echo $row['age']; ?>" required/>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputDateOfBirth" class="form-label">Date of Birth</label>
                                    <input type="text" class="form-control" name="DateOfBirth" id="inputDateOfBirth" value="<?php echo $row['date_of_birth']; ?>" required/>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputGender" class="form-label">Gender</label>
                                    <input type="text" class="form-control" name="Gender" id="inputGender" value="<?php echo $row['gender']; ?>" required/>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputReligion" class="form-label">Religion</label>
                                    <input type="text" class="form-control" name="Religion" id="inputReligion" value="<?php echo $row['religion']; ?>" required/>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputAddress" class="form-label">Address</label>
                                    <input type="text" class="form-control" name="Address" id="inputAddress" value="<?php echo $row['address']; ?>" required/>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputHobby" class="form-label">Hobby</label>
                                    <input type="text" class="form-control" name="Hobby" id="inputHobby" value="<?php echo $row['hobby']; ?>" required/>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputJob" class="form-label">Job</label>
                                    <input type="text" class="form-control" name="Job" id="inputJob" value="<?php echo $row['job']; ?>" required/>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputInstance" class="form-label">Instance</label>
                                    <input type="text" class="form-control" name="Instance" id="inputInstance" value="<?php echo $row['instance']; ?>" required/>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputEmail" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="Email" id="inputEmail" value="<?php echo $row['email']; ?>" required/>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputPhoneNumber" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" name="PhoneNumber" id="inputPhoneNumber" value="<?php echo $row['phone_number']; ?>" required/>
                                </div>
                                <div class="col-12 mb-3">
                                    <button type="reset" class="w-100 btn btn-danger btn-reset">Reset</button>
                                </div>
                                <div>
                                    <button class="w-100 btn btn-success btn-kirim" type="submit">Resubmit</button>
                                </div>
                            </form>
                            
                            <?php
                            } else {
                                echo "<p>Data Not Found</p>";
                            }
                        } else {
                            echo "<p>Invalid Request</p>";
                        }
                        $koneksi->close();
                        ?>
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
