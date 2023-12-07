<?php

//this pulls the MongoDB driver from vendor folder
require_once  '../vendor/autoload.php';

//connect to MongoDB Database
$databaseConnection = new MongoDB\Client;

//connecting to specific database in mongoDB
$myDatabase = $databaseConnection->noitavonneTravellingForm;

//connecting to our mongoDB Collections
$userCollection = $myDatabase->Conform_sets;

// if($userCollection){
// 	echo "Collection ".$userCollection." Connected";
// }
// else{
// 	echo "Failed to connect to Database/Collection";
// }

$submit = false;

if (isset($_POST['submit']) ) {

	$submit = true;
	$name = $_POST['name'];
	$age = $_POST['age'];
	$gender = $_POST['Gender'];
	$email = $_POST['Email'];
	$phoneNo = $_POST['phone'];
	$desc = $_POST['desc'];
	
}

$data = array(
	"Name" => $name,
	"Age" => $age,
	"Gender" => $gender,
	"Email_Id" => $email,
	"Phone Number" => $phoneNo,
	"decsription" => $desc
);

//insert into MongoDB Users Collection
$insert = $userCollection->insertOne($data);

if($insert){
	?>
		<center><h4 style="color: green; font-size:x-large">Successfully Registered</h4></center>
		<center><a href="../index.php"><---Go Back</a></center>
	<?php
}

?>
