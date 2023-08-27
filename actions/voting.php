<?php
include('connect.php');
session_start();
$gid = $_POST['gid'];
$gvotes = $_POST['gvotes'];
$gvotes++;
$uid = $_SESSION['id'];


$votesquery = "Update `userdata` set votes = $gvotes where id = $gid";
$updatevotes = mysqli_query($con, $votesquery);

$statusquery = "Update `userdata` set status = 1 where id = $uid";
$updatevotes = mysqli_query($con, $statusquery);


if($votesquery and $statusquery) {
    $getgroups = mysqli_query($con, "Select username, picture, votes, id from `userdata` where category = 'group' ");
    $groups = mysqli_fetch_all($getgroups, MYSQLI_ASSOC);
    $_SESSION['groups'] = $groups;
    $_SESSION['status'] = 1;
    echo $gid, $uid;
       echo '<script>
       alert("voting success");
       window.location="../userPage/dashboard.php";
    </script>';
}

else {
     echo '<script>
    alert("Technical Error!! Vote after sometime");
    window.location="../userPage/dashboard.php";
    </script>
    ';
}
?>