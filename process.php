<?php 

$servername = "myclassdb.ccuftx8lkjqj.us-east-1.rds.amazonaws.com";
$username = "myclassdb";
$password = "myclassdb";
$dbname = "myclassdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// create a variable
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$department=$_POST['department'];
$email=$_POST['email'];

//Execute the query


$sql= "INSERT INTO employees1 (first_name,last_name,department,email)
		        VALUES ('$first_name','$last_name','$department','$email')";
	
	
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
