<?php
$fromacc=$_POST['faccno'];
$toacc=$_POST['taccno'];
$amt=$_POST['amt'];

  echo"<br>";
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bank";

  
  if($fromacc>=11101 && $fromacc<=11110)
  {
	if($toacc>=11101 && $toacc<=11110)
	{
	  // Creating connection
       $conn = new mysqli($servername, $username, $password, $dbname);
      
      if ($conn->connect_error) 
      {
          die("Connection failed: " . $conn->connect_error);
      }
      
	  //select query for sender
	  $sel = "SELECT * FROM customers WHERE accno = '$fromacc'";
	  $result1 = $conn->query($sel);
	  	
	  /*Updating Sender record*/
	  if ($result1->num_rows > 0) 
	  {
	
		while($row = $result1->fetch_assoc()) 
		{
			$edit = "update customers set amount=amount - '$amt' where accno='$fromacc'";
	
			if ($conn->query($edit) === TRUE) {
			
			}
			else {
					echo "Error updating record: " . $conn->error;
			}    	
		}
	  } 
	  else 
	  {
			echo "Customer not found";
	  }
	  
	  /* Select query for receiver*/
	  $sel2 = "SELECT * FROM customers WHERE accno = '$toacc'";
	  $result2 = $conn->query($sel2);
	  
	  /* Updating Receiver record*/
	  if ($result2->num_rows > 0) 
	  {
		
		while($row2 = $result2->fetch_assoc()) 
		{
			$edit2 = "update customers set amount=amount + '$amt' where accno='$toacc'";
	
			if ($conn->query($edit2) === TRUE) {
			
			echo '<script language="javascript">';
			echo 'window.confirm("Transaction Done Successfully")';
			echo '</script>';
			header('Refresh:0;URL=customers.php');
			}
			else {
					echo "Error updating record: " . $conn->error;
			}
		}
	  } 
	  else 
	  {
			echo "Customer not found";
	  }
	$conn->close();
	}
	else
	{
		echo "Invalid receiver account number";
	}
  }
else
{
	echo"Invalid Sender account number";
}
?>
