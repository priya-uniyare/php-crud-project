<?php
include('config.php')
?>


<?php

$errors = [];

if (isset($_POST['save_btn'])) {

    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $empid = trim($_POST['empid']);
    $designation = trim($_POST['designation']);
    $phoneno = trim($_POST['phoneno']);

    if (empty($fname)) {
        $errors[] = "first name is required";
    }

    if (empty($lname)) {
        $errors[] = "Last name is required";
    }

    if (empty($empid)) {
        $errors[] = "Valid Employee id required";
    }


    if (empty($designation)) {
        $errors[] = "Designation is required";
    }

    if (empty($phoneno) || !preg_match("/^[0-9]{10}$/", $phoneno)) {
        $errors[] = "phone number  must be exactly 10 digits";
    }

    if (empty($errors)) {
        $query = "INSERT INTO emp(fname,lname,empid,designation,phoneno) VALUES('$fname','$lname','$empid','$designation','$phoneno')";

        $data = mysqli_query($conn, $query);

        if ($data) {

            echo "data saved";
            echo "<script>alert('data saved successfully');</script>";
        } else {

            echo "<script> alert('please try again');</script>";
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php Crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>Employee Form</h1>

        <div class="contain p-5">
            <form action="" method="POST">

                <div class="mb-3">
                    <label for="" class="form-label"> First Name</label>
                    <input type="text" name="fname" id="" placeholder="Enter first name" class="form-control mb-3" value="<?php echo htmlspecialchars($fname); ?>">
                    <?php if (!empty($errors['fname'])): ?>
                        <div class="text-danger"><?php echo $errors['fname']; ?></div>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Last Name</label>
                    <input type="text" name="lname" id="" placeholder="Enter last name" class="form-control mb-3">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">EmployeeID</label>
                    <input type="text" name="empid" id="" placeholder="Enter Employee Id" class="form-control mb-3">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Designation</label>
                    <input type="text" name="designation" id="" placeholder="Enter designation" class="form-control mb-3">
                </div>


                <div class="mb-3">
                    <label for="" class="form-label">Phone number</label>
                    <input type="text" name="phoneno" id="" placeholder="Enter phone number" class="form-control mb-3">
                </div>

                <div class="mb-3">

                    <input type="submit" name="save_btn" value="Save" class="btn btn-primary">
                </div>
            </form>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>