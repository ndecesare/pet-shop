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

if((isset($_POST['firstname']) && 
	isset($_POST['lastname']) && 
	isset($_POST['address']) && 
	isset($_POST['city']) && 
	isset($_POST['state']) && 
	isset($_POST['zip']) && 
	isset($_POST['phone']) && 
	isset($_POST['email']) && 
	isset($_POST['pettype']) && 
	isset($_POST['petname']) && 
	isset($_POST['breed']) && 
	isset($_POST['birth'])) && 

	(strlen($_POST['firstname']) >0 && 
	strlen($_POST['lastname']) >0 && 
	strlen($_POST['address']) >0 && 
	strlen($_POST['city']) >0 && 
	strlen($_POST['state']) >0 && 
	strlen($_POST['zip']) >0 && 
	strlen($_POST['phone']) >0 && 
	strlen($_POST['email']) >0 && 
	strlen($_POST['pettype']) >0 && 
	strlen($_POST['petname']) >0 && 
	strlen($_POST['breed'])  >0 && 
	strlen($_POST['birth']))
	)
{


//$spay = isset($_POST['ns']) ? true : false;
$fName = filter_var($_POST["firstname"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$lName = filter_var($_POST["lastname"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$address = filter_var($_POST["address"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$city = filter_var($_POST["city"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$state = filter_var($_POST["state"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$zip = filter_var($_POST["zip"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$phone = filter_var($_POST["phone"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$email = filter_var($_POST["email"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$petType = filter_var($_POST["pettype"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$petName = filter_var($_POST["petname"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$breed = filter_var($_POST["breed"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$spay = filter_var($_POST["ns"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$birth = filter_var($_POST["birth"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

$sql="INSERT INTO grooming (FirstName, LastName, Address, City, State, Zip, PhoneNumber, Email, PetType, Breed, NeuteredOrSpayed, PetBirthday)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[address]', '$_POST[city]', 
	'$_POST[state]', '$_POST[zip]', '$_POST[phone]', '$_POST[email]', 
	'$_POST[pettype]', '$_POST[breed]', '$spay', '$_POST[petname]')";


	if (mysqli_query($con, $sql)) {
		$id = mysqli_insert_id($con);
		echo "<tr id='item_" . $id . "' class='edit_tr'>";
		echo "<td><a href='#' class='del_button' id='del-". $id . "'>Delete Record</a></td>";
		echo "<td class='edit_td'><span id='first_" . $id . "' class='text'>" . $fName . "</span><input type='text' value=" . $fName . " size='8' class='editbox' id='first_input_" . $id ."' /></td>";
		echo "<td class='edit_td'><span id='last_" . $id . "' class='text'>" . $lName . "</span><input type='text' value=" . $lName . " size='8' class='editbox' id='last_input_" . $id ."' /></td>";
		echo "<td class='edit_td'><span id='add_" . $id . "' class='text'>" . $address . "</span><input type='text' value=" . $address . " class='editbox' id='add_input_" . $id ."' /></td>";
		echo "<td class='edit_td'><span id='city_" . $id . "' class='text'>" . $city . "</span><input type='text' value=" . $city . " size='10' class='editbox' id='city_input_" . $id ."' /></td>";
		echo "<td class='edit_td'><span id='state_" . $id . "' class='text'>" . $state . "</span><input type='text' value=" . $state . " size='2' class='editbox' id='state_input_" . $id ."' /></td>";
		echo "<td class='edit_td'><span id='zip_" . $id . "' class='text'>" . $zip . "</span><input type='text' value=" . $zip . " size='5' class='editbox' id='zip_input_" . $id ."' /></td>";
		echo "<td class='edit_td'><span id='phone_" . $id . "' class='text'>" . $phone . "</span><input type='text' value=" . $phone . " size='10' class='editbox' id='phone_input_" . $id ."' /></td>";
		echo "<td class='edit_td'><span id='email_" . $id . "' class='text'>" . $email . "</span><input type='text' value=" . $email . " size='20' class='editbox' id='email_input_" . $id ."' /></td>";
		echo "<td class='edit_td'><span id='pettype_" . $id . "' class='text'>" . $petType . "</span><input type='text' value=" . $petType . " size='5' class='editbox' id='pettype_input_" . $id ."' /></td>";
		echo "<td class='edit_td'><span id='breed_" . $id . "' class='text'>" . $breed . "</span><input type='text' value=" . $breed . " size='15' class='editbox' id='breed_input_" . $id ."' /></td>";
		echo "<td class='edit_td'><span id='petname_" . $id . "' class='text'>" . $petName . "</span><input type='text' value=" . $petName . " size='8' class='editbox' id='petname_input_" . $id ."' /></td>";
		echo "<td class='edit_td'><span id='ns_" . $id . "' class='text'>" . $spay . "</span><input type='text' value=" . $spay . " size='3' class='editbox' id='ns_input_" . $id ."' /></td>";
		echo "<td class='edit_td'><span id='birth_" . $id . "' class='text'>" . $birth . "</span><input type='text' value=" . $birth . " size='15' class='editbox' id='birth_input_" . $id ."' /></td>";
		echo "</tr>";
		mysqli_close($con);
	}

	else{
        //output error
        
        header('HTTP/1.1 500 '.mysql_error());
        header('HTTP/1.1 500 Looks like mysql error, could not insert record!');
        exit();
    }
}

?>

