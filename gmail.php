<?php
$sever = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

$con = mysqli_connect($sever,$username,$password,$dbname);
if(!$con)
{
  echo "not connected";
}

$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$address = $_POST['address'];

$sql = "INSERT INTO `list`(`First Name`, `Last Name`, `Phone no.`, `Gender`, `Email`, `Address`) VALUES ('$fname','$lname','$phone','$gender','$email','$address')";

$result = mysqli_query($con,$sql);

if($result){
  echo "<script>
  alert('Data sent successfully!');
  window.location.href = 'http://localhost/tail-skgv/index.php';
</script>";

}
else{
  echo "<script>alert('Somewent wrong');</script>";

};
