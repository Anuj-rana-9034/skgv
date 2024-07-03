<?php
$sever = "localhost";
$username = "root";
$password = "";
$dbname = "skgv2";

$con = mysqli_connect($sever, $username, $password, $dbname);
if (!$con) {
    echo "not connected";
}

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['phone'];
$membership = $_POST['membership'];

$sql = "INSERT INTO `members`(`Name`, `Email`, `Mobile no.`, `Members`) VALUES ('$name','$email','$mobile','$membership')";

$result = mysqli_query($con, $sql);

if ($result) {
    echo "<script>
            alert('Data sent successfully!');
            window.location.href = 'http://localhost/tail-skgv/index.php';
          </script>";
} else {
    echo "<script>alert('Something went wrong');</script>";
}
?>
