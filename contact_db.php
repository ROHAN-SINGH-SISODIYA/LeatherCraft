<?php


$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con,"leathercraft");

if(isset($_POST['submit']))
{ 
$name = $_POST['nm'];
$email = $_POST['em'];
$mobile = $_POST['mon'];
$message = $_POST['fb'];

$sql="INSERT INTO `contact us`(`Name`, `Email_Id`, `Mobile_number`, `Message`) VALUES ('$name','$email','$mobile','$message')";
$query=mysqli_query($con,$sql);
header('location:contactus.php');
}
else
{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}

mysqli_close($con); // Closing Connection with Server
?>