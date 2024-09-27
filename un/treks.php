<?php
require('../inc/db_config.php');
require('../inc/ess.php');
adminLogin();

if(isset($_POST['add_trek']))

{
$q1 = "INSERT INTO `trek_details`(`name`, `location`, `duration`, `price`, `date`, `availability`, `description`) VALUES (?,?,?,?,?,?,?)";
$values = [$frm_data['name'],$frm_data['location'],$frm_data['duration'],$frm_data['price'],$frm_data['date'],$frm_data['availability'],$frm_data['desc']];
$trek_details_id = mysqli_insert_id($con);
if(insert($q1,$values,'sssiiss')){
   alert('sucessfull','successfully inserted');
}
else{
die('query cannot be prepared - insert');
}
}


if(isset($_POST['get_all_trek']))
{
   $res = selectAll('trek_details');
   $i= 1;

   $data = "";
   while($row = mysqli_fetch_assoc($res))
   {
      if($row['status']==1){
         $status = "<button onclick='toggleStatus($row)' class='btn btn-dark btn-sm shadow-none'>active</button>";
            }
      else{
         $status = "<button  class='btn btn-warning btn-sm shadow-none'>inactive</button>";
      }



      $data.="
      <tr class='align-middle'>
        <td>$i</td>
        <td>$row[name]</td>
        <td>$row[location]</td>
        <td>$row[Duration]</td>
        <td>$row[price]</td>
        <td>$row[date]</td>
        <td>$row[availibilty]</td>
        <td>$Status</td>
        <td>Buttons</td>
        
      </tr>
      ";
     $i++;
   }
   echo $data;
}

?>
