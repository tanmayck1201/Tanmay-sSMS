<?php

include('dbcon.php');

$rollno = $_POST['rollno'];
$name = $_POST['name'];
$city = $_POST['city'];
$pcon = $_POST['pcon'];
$std = $_POST['std'];
$id=$_POST['sid'];
$imagename = $_FILES['simg']['name'];
$tempname = $_FILES['simg']['tmp_name'];

move_uploaded_file($tempname,"../tanmay/$imagename");

$qry="UPDATE `student` SET `roll no` = '$rollno', `name` = '$name', `city` = '$city', `pcont` = '$pcon', `standard` = '$std' WHERE `student`.`id` = $id;";
     
$run= mysqli_query($con,$qry);

if($run == true)
{
  ?>
  <script>
    alert('Data Updated Succesfully !!');
    window.open('updateform.php?sid=<?php echo $id;?>','_self');
  </script>
  <?php 
}

?>