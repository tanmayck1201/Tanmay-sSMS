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
  ?>

  <div class="admintitle" align="center ">
      <h4><a href="logout.php" style="float: right; margin-right: 30px; margin-top: -70px; color: blue; font-size: 20px; " > Logout </a></h4>
      <h1>Welcome to Admin Dashboard</h1>
  </div>

  <div class = "dashboard">
      <table style="width: 50%;" align="center" >
          <tr>
              <td>1.</td><td><a href="addstudent.php">Insert Student Details</a></td>
          </tr>
          <tr>   
              <td>2.</td><td><a href="updatestudent.php">Update Student Details</a></td>
          </tr>
          <tr>    
              <td>3.</td><td><a href="deletestudent.php">Delete Student Details</a></td>
          </tr>    
      </table> 
  </div>    
                    
</body>
</html>

