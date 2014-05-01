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
if(isset($_POST["recordToDelete"]) && strlen($_POST["recordToDelete"])>0 && is_numeric($_POST["recordToDelete"]))
{
    
    $idToDelete = filter_var($_POST["recordToDelete"],FILTER_SANITIZE_NUMBER_INT);
    
    //try deleting record using the record ID we received from POST
    if(!mysqli_query($con, "DELETE FROM grooming WHERE GroomingID=".$idToDelete))
    {
        //If mysql delete record was unsuccessful, output error
        header('HTTP/1.1 500 Could not delete record!');
        exit();
    }
    mysqli_close($con);
    
}

	?>