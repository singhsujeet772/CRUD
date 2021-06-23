<?php
    $name=$_POST['sname'];
    $address=$_POST['saddress'];
    $class=$_POST['class'];
    $phone=$_POST['sphone'];

    include "config.php";
    $sql="INSERT into student(sname,saddress,sclass,sphone) values('{$name}','{$address}',{$class},'{$phone}')";
    $res=mysqli_query($conn,$sql) or die ("Query Unsuccessful");

    header("Location: http://localhost/crudhost/index.php");

    mysqli_close($conn);
?>