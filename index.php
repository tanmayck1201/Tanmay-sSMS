<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">
    <meta name = "name" content="Tanmay's Student Management System">
    <meta name="robots" content="noindex,nofollow">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Tanmay's Student Management system</title>
</head>
<body>
    <div class="img">
    <img src="sms.jpg" width=100% height=100% alt="sms" />
    </div>
    <h3 align = "right" style="margin-right: 20px;" class="login"><a href = login.php>Login Admin</a></h3>
    <h1 align="center" class="head">Welcome to Student Management System</h1>

<form method="post" action="index.php">
    <table style="width: 30%;" align="center" border="1" class="tab">
        <tr>
            <td colspan = "2" align="center ">Student Information</td> 
        </tr> 
        <tr>
            <td align="right ">Choose standard</td>
            <td>
                <select name="std">
                    <option value="9th">9th</option>
                    <option value="10th">10th</option>
                    <option value="11th">11th</option>
                    <option value="12th">12th</option>                    
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                    <option value="4th">4th</option>
                </select>
            </td>  
        </tr>
        <tr>
            <td align="left "> Enter Roll Number </td>
            <td>
                <input type="text" name="rollno" required>
            </td>  
        </tr>
        <tr >
            <td colspan = "2" align="center "><input type="submit" name="submit" value="show info"></td> 
        </tr>
    </table>
</form>


    
</body>
</html>

<?php

if(isset($_POST['submit']))
{
    $standard= $_POST['std'];
    $rollno= $_POST['rollno'];

    include('dbcon.php');
    include('function.php');

    showdetails($standard,$rollno);
}

?>