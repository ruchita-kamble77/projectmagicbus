<?php
include "db_conn.php";
$sr_no=$_GET['sr_no'];
$sql="DELETE FROM `user_queries` WHERE sr_no=$sr_no";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location:trek.php?msg=deleted successfully");
}
else{
    echo"failed: " . mysqli_error($conn);
}

?>