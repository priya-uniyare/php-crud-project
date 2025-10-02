<?php
include 'config.php';

$id=$_GET['id'];
$query="DELETE FROM emp WHERE id='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
    ?>
    <script>
        alert("record deleted Successfully");

        window.open("http://localhost/php/emp/index.php", _self)
        
    </script>

    <?php

}
else{
    ?>
    <script>
        alert("please try again");
         window.open("http://localhost/php/emp/index.php", _self)
    </script>

    <?php
}


?>