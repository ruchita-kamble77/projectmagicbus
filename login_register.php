<?php
require('connection.php');
session_start();
#fro login 
if(isset($_POST['login']))
{
    $query="SELECT * FROM `register_user` WHERE `email`='$_POST[eamil_username]' 
      OR `uname`='$_POST[eamil_username]'";
      $result=mysqli_query($con,$query);
      
      if($result)
      {
        if(mysqli_num_rows($result)==1)
        {
           $result_fetch=mysqli_fetch_assoc($result);
           if(password_verify($_POST['password'],$result_fetch['password']))
           {#if password match 
            $_SESSION['logged_in']=true;
            $_SESSION['uname']=$result_fetch['uname'];
            header("location: home.php");
           }
           else
           {
            #if incorrect password
            echo "
                <script>
                    alert('Incorrect password');
                </script>";
            header("location: home.php");
           }
        }
    
      }
      else
      {
        echo"<script>alert('Email or Username Not Registered');
                </script>";
            header("location: home.php");
      }

}




#for  registration
if(isset($_POST['register']))
{
    $user_exist_query = "SELECT * FROM `register_user` WHERE `uname`='$_POST[uname]' OR`email`='$_POST[email]' ";
    $result = mysqli_query ($con,$user_exist_query);

    if($result)
    {
        if(mysqli_num_rows($result)>0) # it will be executed if  username or email is aleready taken
        {
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['uname']==$_POST['uname'])
            {
                #error for username aleready taken
                echo"<script>
                    alert('$result_fetch[uname] - Username alerady Taken');
                    </script>";
                    header("location: home.php");
            }
            else
            {
                #error fo email aleready registered
                echo"<script>alert('$result_fetch[email] - Email alerady Registered');
                    </script>";
                header("location: home.php");
            }
        }
    
    else #it will be executed if  no one has  taken username  or email before
    {
        #$password=password_hash($_POST['password'],PASSWORD_BCRYPT);
        $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
        $query = "INSERT INTO `register_user` (`name`,`uname`, `email`, `address`, `phone`, `dob` , `certificate` ,`password`) VALUES('$_POST[name]','$_POST[uname]','$_POST[email]','$_POST[address]','$_POST[phone]','$_POST[dob]','$_POST[certificate]','$password')";
        if(mysqli_query($con,$query))
        { 
            #if data inserted successfully
            echo"<script>alert('Registration Succuessfull');
                </script>";
            header("location: home.php");
            }
        else 
        {
            echo"<script>alert('cannot run query');
                </script>";
            header("location: home.php");
            }
    }
}
}
?>