<?php

session_start();
if(isset($_SESSION['uid']))
{
    header('location:admindash.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">
    <meta name = "name" content="Tanmay's Student Management System">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin Login</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="lightgreen">
    <h1 align="center">Admin Login </h1>
    <form action="login.php" method="post" class="tb">
        <table align="center">
            <tr>
                <td>Username</td><td><input type ="text" name="urname" required></td>

            </tr>
            <tr>
                <td>Password</td><td><input type="password" name="pass" required></td>

            </tr>
            <tr>
                <td colspan="2" align="center" ><input type="submit" name="login" value="login" /></td>
            </tr>

        </table>

    </form>

</body>
</html>

<?php

include('dbcon.php');

if(isset($_POST['login']))
{
    $username = $_POST['urname'];
    $password = $_POST['pass'];

    $qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    //$result=mysqli_query($con,$qry);
    $run = mysqli_query($con,$qry);
    $row = mysqli_num_rows($run);

    if($row<1)
    {
        ?>
        <script>
            alert('Username or Password not match !!');
            window.open('login.php','_self');
        </script>
        <?php
    }
    else{
        $data = mysqli_fetch_assoc($run);

        $id=$data['id'];
        

        $_SESSION['uid']=$id;
        header('location:admindash.php');

    }

}

?>