<!-------patient appointment booking are inserted into the database--->
<?php

    require_once 'connection.php';
    $id=$_POST['id'];
    $dr_name=$_POST['dr_name'];
	$specialisation=$_POST['specialisation'];
    $app_date=$_POST['app_date'];
    $app_time_from=$_POST['app_time_from'];
    $app_time_to=$_POST['app_time_to'];
   


		if(isset($_POST['submit']))
		{ 
            echo "Thank You!";

		$sql="INSERT INTO patientappointment(id,dr_name,specialisation,app_date,app_time_from,app_time_to)VALUES('".$id."','".$dr_name."',
        '".$specialisation."','".$app_date."','".$app_time_from."','".$app_time_to."')";
			if(!$result=$conn->query($sql))
			{
				die('There was an error running in the query['.$conn->error.']');
			}
			else
			{
				echo "Thank You!";
            }
        mysqli_close($conn);
			
		}
?>