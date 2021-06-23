<?php
    $id=$_GET['id'];
    include "config.php";

    $sql="DELETE FROM student WHERE sid={$id}";
    
    $res=mysqli_query($conn,$sql) or die ("Query Unsuccessful");

    header("Location: http://localhost/crudhost/index.php");

    mysqli_close($conn);

?>