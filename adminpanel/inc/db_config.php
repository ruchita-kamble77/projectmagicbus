<?php
$hmane = 'localhost';
$uname = 'root';
$pass = '';
$db = 'trekwebsite';

$con = mysqli_connect($hmane,$uname,$pass,$db);

if(!$con){
    die("cannot connect to Database".mysqli_connect_error());

}
function filteration($data){
    foreach($data as $key => $value){
       $value = trim($value);
       $value = stripslashes($value);
       $value = strip_tags($value);
       $value = htmlspecialchars($value);
       $data[$key] = $value;
    }
    return $data;
}

function selectAll($table){
    $con = $GLOBALS['con'];
    $res = mysqli_query($con,"SELECT * FROM $table");
    return $res;
}
function select($sql,$values,$datatypes)
{
    $con = $GLOBALS['con'];
    if($stmt = mysqli_prepare($con,$sql))
    {
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("Query cannot be prepared - select");
        }
     
    }
    else{
        die("Query cannot be exeuted - Selcet");
    }
}

function update($sql,$values,$datatypes)
{
    $con = $GLOBALS['con'];
    if($stmt = mysqli_prepare($con,$sql))
    {
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("Query cannot be prepared - update");
        }
     
    }
    else{
        die("Query cannot be exeuted - update");
    }
}
function insert($sql,$values,$datatypes)
{

    $con = $GLOBALS['con'];
    if($stmt = mysqli_prepare($con,$sql))
    {
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("Query cannot be prepared - Insert");
        }
     
    }
    else{
        die("Query cannot be exeuted - Insert");
    }
}
function delete($sql,$values,$datatypes)
{
    $con = $GLOBALS['con'];
    if($stmt = mysqli_prepare($con,$sql))
    {
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("Query cannot be prepared - delete");
        }
     
    }
    else{
        die("Query cannot be exeuted - delete");
    }
}


?>

