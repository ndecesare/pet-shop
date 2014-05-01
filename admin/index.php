<?php
require 'html_head.php';
include 'header.php';

?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

	$(".insert").click(function() {
		$(".insertForm").show();

	});

	//create
	$(".submit_button").click(function (e) {
        
        e.preventDefault();
        var first=$("#first_insert").val();
		var last=$("#last_insert").val();
		var address=$("#add_insert").val();
		var city=$("#city_insert").val();
		var state=$("#state_insert").val();
		var zip=$("#zip_insert").val();
		var phone=$("#phone_insert").val();
		var email=$("#email_insert").val();
		var pettype=$("#pettype_insert").val();
		var breed=$("#breed_insert").val();
		var petname=$("#petname_insert").val();
		var ns=$("#ns_insert").val();
		var birth=$("#birth_insert").val();
        var dataString = 'firstname='+first+'&lastname='+last+'&address='+address+'&city='+city+'&state='+state+'&zip='+zip+'&phone='+phone+'&email='+email+'&pettype='+pettype+'&breed='+breed+'&petname='+petname+'&ns='+ns+'&birth='+birth;

       $.ajax({
            type: "POST", 
            url: "create.php", 
            dataType:"text", 
            data:dataString, 
            success:function(response){
            $("#adminTable").append(response);
			$("#adminTable tr:last").on("change",function()
{
var ID=$(this).attr('id');

var split = ID.split('_');
var first=$("#first_input_"+split[1]).val();
var last=$("#last_input_"+split[1]).val();
var address=$("#add_input_"+split[1]).val();
var city=$("#city_input_"+split[1]).val();
var state=$("#state_input_"+split[1]).val();
var zip=$("#zip_input_"+split[1]).val();
var phone=$("#phone_input_"+split[1]).val();
var email=$("#email_input_"+split[1]).val();
var pettype=$("#pettype_input_"+split[1]).val();
var breed=$("#breed_input_"+split[1]).val();
var petname=$("#petname_input_"+split[1]).val();
var ns=$("#ns_input_"+split[1]).val();
var birth=$("#birth_input_"+split[1]).val();
var dataString = 'id='+ split[1] +'&firstname='+first+'&lastname='+last+'&address='+address+'&city='+city+'&state='+state+'&zip='+zip+'&phone='+phone+'&email='+email+'&pettype='+pettype+'&breed='+breed+'&petname='+petname+'&ns='+ns+'&birth='+birth;


});

            $(".insert input").val('');
            },
            error:function (xhr, ajaxOptions, thrownError){
                alert(thrownError); //throw any errors
            }
        });
     });

//end create


//delete logic
$("body").on("click", ".del_button", function(e) {
	e.preventDefault();
	e.stopImmediatePropagation();
	var clickedID = this.id.split("-");
	var DbNumberID = clickedID[1];
	var dataString = 'recordToDelete=' + DbNumberID;

	$.ajax({
		type: "POST",
		url: "delete.php",
		dataType: "text",
		data: dataString,
		success: function(response) {
			$('#item_'+DbNumberID).fadeOut("slow");
		},
		error: function (xhr, ajaxOptions, thrownError) {
			alert(thrownError);
		}
	});
}); //end delete 


$("body").on("click", ".edit_tr", function()
{
var ID=$(this).attr('id');
var split = ID.split('_');
$("#first_"+split[1]).hide();
$("#last_"+split[1]).hide();
$("#add_"+split[1]).hide();
$("#city_"+split[1]).hide();
$("#state_"+split[1]).hide();
$("#zip_"+split[1]).hide();
$("#phone_"+split[1]).hide();
$("#email_"+split[1]).hide();
$("#pettype_"+split[1]).hide();
$("#breed_"+split[1]).hide();
$("#petname_"+split[1]).hide();
$("#ns_"+split[1]).hide();
$("#birth_"+split[1]).hide();
$("#first_input_"+split[1]).show();
$("#last_input_"+split[1]).show();
$("#add_input_"+split[1]).show();
$("#city_input_"+split[1]).show();
$("#state_input_"+split[1]).show();
$("#zip_input_"+split[1]).show();
$("#phone_input_"+split[1]).show();
$("#email_input_"+split[1]).show();
$("#pettype_input_"+split[1]).show();
$("#breed_input_"+split[1]).show();
$("#petname_input_"+split[1]).show();
$("#ns_input_"+split[1]).show();
$("#birth_input_"+split[1]).show();
});

$("body").on("change", ".edit_tr", function()
{
var ID=$(this).attr('id');

var split = ID.split('_');
var first=$("#first_input_"+split[1]).val();
var last=$("#last_input_"+split[1]).val();
var address=$("#add_input_"+split[1]).val();
var city=$("#city_input_"+split[1]).val();
var state=$("#state_input_"+split[1]).val();
var zip=$("#zip_input_"+split[1]).val();
var phone=$("#phone_input_"+split[1]).val();
var email=$("#email_input_"+split[1]).val();
var pettype=$("#pettype_input_"+split[1]).val();
var breed=$("#breed_input_"+split[1]).val();
var petname=$("#petname_input_"+split[1]).val();
var ns=$("#ns_input_"+split[1]).val();
var birth=$("#birth_input_"+split[1]).val();
var dataString = 'id='+ split[1] +'&firstname='+first+'&lastname='+last+'&address='+address+'&city='+city+'&state='+state+'&zip='+zip+'&phone='+phone+'&email='+email+'&pettype='+pettype+'&breed='+breed+'&petname='+petname+'&ns='+ns+'&birth='+birth;

if(first.length>0 && last.length>0 && address.length > 0 && city.length > 0 && state.length > 0 && zip.length > 0 && phone.length > 0 && email.length > 0 && pettype.length > 0 && breed.length > 0 && ns.length > 0 && birth.length > 0) 
{

$.ajax({
type: "POST",
url: "edit.php",
data: dataString,
cache: false,
success: function(html)
{
$("#first_"+split[1]).html(first);
$("#last_"+split[1]).html(last);
$("#add_"+split[1]).html(address);
$("#city_"+split[1]).html(city);
$("#state_"+split[1]).html(state);
$("#zip_"+split[1]).html(zip);
$("#phone_"+split[1]).html(phone);
$("#email_"+split[1]).html(email);
$("#pettype_"+split[1]).html(pettype);
$("#breed_"+split[1]).html(breed);
$("#petname_"+split[1]).html(petname);
$("#ns_"+split[1]).html(ns);
$("#birth_"+split[1]).html(birth);
}
});
}
else
{
alert('Enter something.');
}

});

// Edit input box click action
$(".editbox").mouseup(function() 
{
return false
});

// Outside click action
$(document).mouseup(function()
{
$(".editbox").hide();
$(".text").show();
});

}); // end doc.ready

</script>

<h2>Admin Panel</h2>

<p>Click on an entry to edit it.  Click outside the entry to update the table.</p>
<table id="adminTable">
	<thead>
		<th>&nbsp;</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Address</th>
		<th>City</th>
		<th>State</th>
		<th>Zip Code</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Pet Type</th>
		<th>Breed</th>
		<th>Pet Name</th>
		<th>Neutered/Spayed (1=yes, 0=no)</th>
		<th>Pet Birthday</th>
	</thead>
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
	$sql=mysqli_query($con,"SELECT * FROM grooming");
while($row=mysqli_fetch_array($sql))
{
$id=$row['GroomingID'];
$firstname=$row['FirstName'];
$lastname=$row['LastName'];
$address=$row['Address'];
$city=$row['City'];
$state = $row['State'];
$zip = $row['Zip'];
$phone = $row['PhoneNumber'];
$email = $row['Email'];
$pettype = $row['PetType'];
$breed = $row['Breed'];
$petname = $row['PetName'];
$ns = $row['NeuteredOrSpayed'];
$birth = $row['PetBirthday'];
?>


<tr id="item_<?php echo $id; ?>" class="edit_tr">
	<td>
<a href="#" class="del_button" id="del-<?php echo $id; ?>">Delete Record</a>
	</td>

<td class="edit_td">
<span id="first_<?php echo $id; ?>" class="text"><?php echo $firstname; ?></span>
<input type="text" value="<?php echo $firstname; ?>" size="8" class="editbox" id="first_input_<?php echo $id; ?>" />
</td>

<td class="edit_td">
<span id="last_<?php echo $id; ?>" class="text"><?php echo $lastname; ?></span> 
<input type="text" value="<?php echo $lastname; ?>" size="8" class="editbox" id="last_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="add_<?php echo $id; ?>" class="text"><?php echo $address; ?></span> 
<input type="text" value="<?php echo $address; ?>" class="editbox" size="15" id="add_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="city_<?php echo $id; ?>" class="text"><?php echo $city; ?></span> 
<input type="text" value="<?php echo $city; ?>" class="editbox" size="10" id="city_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="state_<?php echo $id; ?>" class="text"><?php echo $state; ?></span> 
<input type="text" value="<?php echo $state; ?>" class="editbox" size="2" id="state_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="zip_<?php echo $id; ?>" class="text"><?php echo $zip; ?></span> 
<input type="text" value="<?php echo $zip; ?>" class="editbox" size="5" id="zip_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="phone_<?php echo $id; ?>" class="text"><?php echo $phone; ?></span> 
<input type="text" value="<?php echo $phone; ?>" class="editbox" size="10" id="phone_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="email_<?php echo $id; ?>" class="text"><?php echo $email; ?></span> 
<input type="text" value="<?php echo $email; ?>" class="editbox" size="20" id="email_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="pettype_<?php echo $id; ?>" class="text"><?php echo $pettype; ?></span> 
<input type="text" value="<?php echo $pettype; ?>" class="editbox" size="5" id="pettype_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="breed_<?php echo $id; ?>" class="text"><?php echo $breed; ?></span> 
<input type="text" value="<?php echo $breed; ?>" class="editbox" size="10" id="breed_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="petname_<?php echo $id; ?>" class="text"><?php echo $petname; ?></span> 
<input type="text" value="<?php echo $petname; ?>" class="editbox" size="8" id="petname_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="ns_<?php echo $id; ?>" class="text"><?php echo $ns; ?></span> 
<input type="text" value="<?php echo $ns; ?>" class="editbox" size="3" id="ns_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="birth_<?php echo $id; ?>" class="text"><?php echo $birth; ?></span> 
<input type="text" value="<?php echo $birth; ?>" class="editbox" size="15" id="birth_input_<?php echo $id; ?>"/>
</td>

</tr>

<?php
}
?>
</table>

<div class="insertForm">
<form  method="post" name="form" action="">

<label>First Name</label><input type="text" size="8" class="insertbox" id="first_insert" /><br>

<label>Last Name</label><input type="text" size="8" class="insertbox" id="last_insert" /><br>

<label>Address</label><input type="text" size="10" class="insertbox" id="add_insert" /><br>

<label>City</label><input type="text" size="10" class="insertbox" id="city_insert" /><br>

<label>State</label><input type="text" size="2" class="insertbox" id="state_insert" /><br>

<label>Zip Code</label><input type="text" size="5" class="insertbox" id="zip_insert" /><br>

<label>Phone</label><input type="text" size="15" class="insertbox" id="phone_insert" /><br>

<label>Email</label><input type="text" size="15" class="insertbox" id="email_insert" /><br>

<label>Pet Type</label><input type="text" size="5" class="insertbox" id="pettype_insert" /><br>

<label>Breed</label><input type="text" size="10" class="insertbox" id="breed_insert" /><br>

<label>Pet Name</label><input type="text" size="8" class="insertbox" id="petname_insert" /><br>

<label>Spayed/Neutered</label><input type="text" size="3" class="insertbox" id="ns_insert" /><br>

<label>Pet Birthday</label><input type="text" size="8" class="insertbox" id="birth_insert" /><br>

<input type="submit" value="Post" name="submit" class="submit_button"/>
</form>
</div>
<a class="insert" href="#">Create new grooming request</a>


<?php

	require 'footer.php';

?>