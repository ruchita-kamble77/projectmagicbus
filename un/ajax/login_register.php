<?php
 require('../adminpanel/inc/db_config.php');
 require('../adminpanel/inc/ess.php');

 if(isset($_POST['register']))
 {
    $data -filteration($_POST);

    if($data['pass'] != $data['conpass']){
        echo 'pass_mismatch';
        exit;
    }

    $u_exit = select("SELECT * FROM `user_cred` WHERE `email` = ? AND `phonenum`= ? LIMIT  1",
    [$data['email'],$data['phonenum']],"ss");
    
    if (mysqli_num_rows($u_exist)!=0){
        $u_exit_fetch = mysqli_fetch_assoc($u_exits);
        echo($u_exit_fetch['email'] == $data['email']) ? 'email_already' : 'phone_already';
        exit;
        
        //user certificate to server

        $img = uploadUserImage($_FILES['certificate']);

        if($img == 'inv_img'){
            echo 'inv_img';
            exit;
        }
        else if($img == 'upd_failed'){
            echo 'upd_failed';
            exit;
        }
        //send confirmation link to user email
        



    }


    
 }


?>