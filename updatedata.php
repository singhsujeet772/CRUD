<?php
    $id=$_POST['sid'];
    $name=$_POST['sname'];
    $address=$_POST['saddress'];
    $class=$_POST['sclass'];
    $phone=$_POST['sphone'];

    include "config.php";
    $sql="UPDATE student set sname='{$name}',saddress='{$address}',sclass={$class},sphone='{$phone}' where sid={$id}";
    $res=mysqli_query($conn,$sql) or die ("Query Unsuccessful");

    header("Location: http://localhost/crudhost/index.php");

    mysqli_close($conn);
?>