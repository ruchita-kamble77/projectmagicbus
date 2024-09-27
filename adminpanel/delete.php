<?php
include "db_conn.php";
$id=$_GET['id'];
$sql="DELETE FROM `trek_details` WHERE id=$id";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location:trek.php?msg=deleted successfully");
}
else{
    echo"failed: " . mysqli_error($conn);
}

?>