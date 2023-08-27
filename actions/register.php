<?php
include('connect.php');

$username = $_POST['username'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];
if(isset($_FILES['picture'])) {
$picture = $_FILES['picture']['name'];
$tmp_name = $_FILES['picture']['tmp_name'];
}
$category = $_POST['std'];
if($pass!=$pass2) {
    echo '<script>
    alert("Password did not match");
    window.location="../index.php#pills-register";
    </script>
    ';
}
else {
    move_uploaded_file($tmp_name,"../uploads/$picture");
    $sql = "insert into `userdata` (username, email, mobile, password, picture, category, status, votes)
    values('$username','$email','$mobile','$pass','$picture','$category',0,0)";

    $result = mysqli_query($con, $sql);

    if($result) {
         echo '<script>
    alert("Registration Success!!");
    window.location="../index.php";
    </script>
    ';
    }
}
?>