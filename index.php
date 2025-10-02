
<?php

include 'config.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EMployee Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1>Employee Record's </h1>

    <div class="container mt-5">
        <table class="table ">
        <thead class="">
        <th class="bg-dark text-white">ID</th>
        <th class="bg-dark text-white">First Name</th>
        <th class="bg-dark text-white">Last Name</th>
        <th class="bg-dark text-white">EmployeeID</th>
        <th class="bg-dark text-white">Designation</th>
        <th class="bg-dark text-white">Phone Number</th>
        <th class="bg-dark text-white">Action</th>
        </thead>
        <tbody>
            <?php
        $select="SELECT * FROM emp";
        $data=mysqli_query($conn,$select);
        $result=mysqli_num_rows($data);
        if($result)
            {
                $i=1;
                while($row=mysqli_fetch_array($data))
                    {
                        
                        
                        ?>
                        <tr>

                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['fname']; ?></td>
                            <td><?php echo $row['lname'];?></td>
                            <td><?php echo $row['empid'];?></td>
                            <td><?php echo $row['designation'];?></td>
                            <td><?php echo $row['phoneno'];?></td>
                            <td>
                                <a href="create.php" class="btn btn-dark`">Create</a>
                                <a href="update.php?id=<?php  echo $row['id'];?>" class="btn btn-success">Edit</a>

                                 <a href="delete.php?id=<?php  echo $row['id'];?>" class="btn btn-danger">Delete</a>
                                

                               
                            </td>

                            
                        </tr>




                        <?php
                        $i++;
                    }
            }
        


        
        
        ?>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         
        </tr>

        </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>