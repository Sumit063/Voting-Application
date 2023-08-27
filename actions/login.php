<?php
include('connect.php');

$email = $_POST['email'];
$pass = $_POST['password'];
session_start();

$sql = "Select * from `userdata` where email = '$email' and password = '$pass'";

$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0) {
    $sql = "select username, picture, votes, id from `userdata` where category = 'group' ";
    $resultgroup = mysqli_query($con, $sql);
    if(mysqli_num_rows($resultgroup)>0) {
        $groups = mysqli_fetch_all($resultgroup, MYSQLI_ASSOC);
        $_SESSION['groups'] = $groups;
    }

    $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $_SESSION['id'] = $data['id'];
    $_SESSION['status'] = $data['status'];
    $_SESSION['dataa'] = $data;

       echo '<script>
    window.location="../userPage/dashboard.php";
    </script>';
}

else {
     echo '<script>
    alert("Invalid credentials");
    window.location="../index.php";
    </script>
    ';
}
?>