<?php
try
	{
		$con = mysqli_connect('localhost', 'ndecesare', 'password'); 
		mysqli_select_db( $con, 'pet_shop');

	}

	catch (Exception $e)
	{
		echo "Failed: <br>" + $e->getMessage();
	}
if($_POST['id'])
{
$id=$_POST['id'];
$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$petType = $_POST['pettype'];
$breed = $_POST['breed'];
$petname = $_POST['petname'];
$ns = $_POST['ns'];
$birth = $_POST['birth'];
$sql = "UPDATE grooming SET FirstName='$firstname',LastName='$lastname',Address='$address',City='$city',State='$state',Zip='$zip',PhoneNumber='$phone', Email='$email', PetType='$petType',Breed='$breed',PetName='$petname',NeuteredOrSpayed='$ns',PetBirthday='$birth' WHERE GroomingID='$id'";
echo $sql;
mysqli_query($con, $sql);
$fetch= mysqli_query($con,"SELECT * FROM grooming");
$row=mysqli_fetch_array($fetch);
}
?>