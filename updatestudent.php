<?php

session_start();

      if(isset($_SESSION['uid']))
      {
          echo $_SESSION['uid']; 
      }
      else
      {
          header('location:login.php');

      }

?>

<?php
  include('header.php');
  include('titlehead.php');
?>

<form action="updatestudent.php" method="post">
<table>
    <tr>
        <th>Enter Standard</th>
        <td><input type="number" name="standard" placeholder="Enter Standard" required/></td>
    </tr>
    <tr>
        <th>Enter Student Name</th>    
        <td><input type="text" name="stuname" placeholder="Enter Student name" required/></td>
    </tr>

        <td colspan="2" align="center"><input type="submit" name="submit" value="search" ></td>

    </tr>
</table>
</form>

<table align="center" width="80%" border="1" style="margin-top:10px;">
    <tr style="background-color:#000; color:#fff;">
        <th>NO</th>
        <th>Image</th>
        <th>Name</th>
        <th>Roll No</th>
        <th>Edit</th>
    </tr>   

<?php
if(isset($_POST['submit']))
{
    include('dbcon.php');

    $standard = $_POST['standard'];
    $name = $_POST['stuname'];

    $sql="SELECT * FROM `student` WHERE `standard`='$standard' AND `name` LIKE '%$name%'";
    $run=mysqli_query($con,$sql);

    if(mysqli_num_rows($run)<1)
    {
        echo "<tr><td colspan='5'>No Records Found</td></tr>";
    }
    else
    {
        $count=0;
        while($data=mysqli_fetch_assoc($run))
        {
            $count++;
            ?>

            <tr>
              <td><?php echo $count; ?></td>
              <td><img src="../tanmay/<?php echo $data['image']; ?>" style="max-width:100px; padding-left:30px;" /></td>
              <td><?php echo $data['name']; ?></td>
              <td><?php echo $data['roll no'] ?></td>
              <td><a href = "updateform.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
            </tr> 
            <?php
        }
    }

}

?>

</table>