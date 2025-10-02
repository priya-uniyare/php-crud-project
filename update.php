<?php
include 'config.php';
$id=$_GET['id'];
$select="SELECT * FROM emp WHERE id='$id'";
$data=mysqli_query($conn,$select);
$row=mysqli_fetch_array($data);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>employe Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
   <div class="container mt-5">
        <h1>Employee Form</h1>

        <div class="contain p-5">
            <form action="" method="POST">

                <div class="mb-3">
                    <label for="" class="form-label"> First Name</label>
                    <input type="text" name="fname"  value="<?php echo $row['fname'] ?>" id="" placeholder="Enter first name" class="form-control mb-3">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Last Name</label>
                    <input type="text" name="lname" id="" value="<?php echo $row['lname'] ?>" placeholder="Enter last name" class="form-control mb-3">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">EmployeeID</label>
                    <input type="text" name="empid" id="" value="<?php echo $row['empid'] ?>" placeholder="Enter Employee Id" class="form-control mb-3">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Designation</label>
                    <input type="text" name="designation" id="" 
                      placeholder="Enter designation"  value="<?php echo $row['designation'] ?>"  class="form-control mb-3">
                </div>


                <div class="mb-3">
                    <label for="" class="form-label">Phone number</label>
                    <input type="text" name="phoneno" id="" value="<?php echo $row['phoneno'] ?>"   placeholder="Enter phone number" class="form-control mb-3">
                </div>

                <div class="mb-3">
                    <input type="submit" name="update_btn" value="Update" class="btn btn-primary">
                     <a href="index.php" class="btn btn-primary">Back</a>
                </div>

                 
            </form>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>

<?php

if (isset($_POST['update_btn'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $empid = $_POST['empid'];
    $designation = $_POST['designation'];
    $phoneno = $_POST['phoneno'];

    $query = "UPDATE emp SET fname='$fname',lname='$lname',empid='$empid',designation='$designation',phoneno='$phoneno' WHERE  id='$id'";

    $data=mysqli_query($conn, $query);

    if ($data) {

        echo "data updated";
?>
        <script>
            alert("data  updated successfully");
        </script>

    <?php
    } else {
    ?>
        <script>
             alert("please try again");
        </script>
<?php

    }
}


?>