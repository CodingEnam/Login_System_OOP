<?php
session_start();
    include("connection.php");
    include("functions.php");
    $user_data_obj = new functions(); //!Creating an object from the functions class from functions.php
    $user_data=$user_data_obj->check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Velinu - Account</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>Welcome Mr. <?php echo $user_data['user_name'] ?></h1>
    <br>
    This is your profile page
</body>
</html>