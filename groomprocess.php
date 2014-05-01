<?php
require 'html_head.php';
include 'header.php';


$con=mysqli_connect("localhost","ndecesare","password","pet_shop");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$spay = isset($_POST['spayNeuter']) ? true : false;


$sql="INSERT INTO grooming (FirstName, LastName, Address, City, State, Zip, PhoneNumber, Email, PetType, Breed, NeuteredOrSpayed, PetBirthday)
VALUES
('$_POST[firstName]','$_POST[lastName]','$_POST[address]', '$_POST[city]', 
	'$_POST[state]', '$_POST[zip]', '$_POST[phone]', '$_POST[email]', 
	'$_POST[petType]', '$_POST[breed]', '$spay', '$_POST[petBirthday]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  else {
  	echo "<p><img src='assets/dogs.jpg' /> Thank you for submitting your grooming request.  If anything changes, we will be sure to contact you.</p>";
  }


mysqli_close($con);

include 'footer.php';
?>