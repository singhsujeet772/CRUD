<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
        include "config.php";
        $sql="SELECT * from student join class on student.sclass=class.cid order by sid ASC";
        $res=mysqli_query($conn,$sql) or die ("Query Unsuccessful");
        if(mysqli_num_rows($res)>0){
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
        <?php while($row=mysqli_fetch_assoc($res)){ ?>
            <tr>
                <td><?php echo $row['sid']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['saddress']; ?></td>
                <td><?php echo $row['cname']; ?></td>
                <td><?php echo $row['sphone']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid']; ?>'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php 
        }else{
            echo "<h2>no Records Found</h2>";
        }
        mysqli_close($conn);
    ?>
</div>
</div>
</body>
</html>
