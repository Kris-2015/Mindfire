<?php
	$servername = "localhost";
	$username   = "root";
	$password   = "mindfire";
	$db_name	= "employee";
	
	// Create connection
	$con = new mysqli($servername,$username,$password,$db_name);
	
	//Check connection
	if($con->connect_error)
	{
		die("Connection Failed: " . $con->connect_error);	
	}
	
	/*
	//Create database
	
	$sql = "CREATE DATABASE employee";
	
	if($con->query($sql) === TRUE)
	{
		echo "Database Created successfully";	
	}
	else
	{
		echo " Erroo creating database:  " . $con->error;
	}
	
	//echo "Connected successfully";
	*/
	
	/*
	//sql to create table
	$sql = "CREATE TABLE employee(
			id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			first_name  VARCHAR(30) NOT NULL,
			middle_name VARCHAR(30) NOT NULL,
			last_name   VARCHAR(30) NOT NULL,
			email       VARCHAR(30)
	)";
	
	if($con->query($sql) === TRUE)
	{
		echo "employee table created successfully";
	}
	else
	{
		echo "Error creating table:" . $con->error;
	}
	*/
	
	 //variable declaration
	$first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '' ;

	$middle_name = isset($_POST['middle_name']) ? $_POST['middle_name'] : '' ;
	
	$last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '' ;
	
	$prefix = isset($_POST['prefix']) ? $_POST['prefix'] : '' ;
	
	$gender = isset($_POST['gender']) ? $_POST['gender'] : '' ;
	
	$dob = isset($_POST['dob']) ? $_POST['dob'] : '' ;
	
	$marital_status = isset($_POST['marital_status']) ? $_POST['marital_status'] : '' ;
	
	$employment = isset($_POST['employment']) ? $_POST['employment'] : '';
	
	$employer = isset($_POST['employer']) ? $_POST['employer'] : '';
	
	$image = isset($_POST['image']) ? $_POST['image'] : '';
	
	$home_street = isset($_POST['home_street']) ? $_POST['home_street'] : '';
	
	$home_city = isset($_POST['home_city']) ? $_POST['home_city'] : '';
	
	$home_state = isset($_POST['home_state']) ? $_POST['home_state'] : '';
	
	$home_zip = isset($_POST['home_zip']) ? $_POST['home_zip'] : '';
	
	$home_mobile = isset($_POST['home_mobile']) ? $_POST['home_mobile'] : '';
	
	$home_landline = isset($_POST['home_landline']) ? $_POST['home_landline'] : '';
	
	$home_fax = isset($_POST['home_fax']) ? $_POST['home_fax'] : '';
	
	$office_street = isset($_POST['office_street']) ? $_POST['office_street'] : '';
	
	$office_city = isset($_POST['office_city']) ? $_POST['office_city'] : '';
	
	$office_state = isset($_POST['office_state']) ? $_POST['office_state'] : '';
	
	$office_zip = isset($_POST['office_zip']) ? $_POST['office_zip'] : '';
	
	$office_mobile = isset($_POST['office_mobile']) ? $_POST['office_mobile'] : '';
	
	$office_landline = isset($_POST['office_landline']) ? $_POST['office_landline'] : '';
	
	$office_fax = isset($_POST['office_fax']) ? $_POST['office_fax'] : '';
	
	$communication = isset($_POST['communication[]') ? $_POST['communication[]'] : '';

	
	
	//Insert operation in table employee
	$sql = "INSERT INTO employee(first_name, middle_name, last_name, prefix, gender, dob, marital_status, employment, employer, image)               VALUES('$first_name','$middle_name','$last_name','$prefix','$gender','$dob','$marital_status','$employment','$employer','$image');";
	
	if($con->query($sql) === TRUE){
		$last_id = $con->insert_id;
	
	//insert operation in address
	$sql2 = "INSERT INTO address(employee_id, type, street, city, state, zip, mobile, landline, fax)  VALUES('$last_id','residence','$home_street', '$home_city','$home_state','$home_zip','$home_mobile', '$home_landline', '$home_fax'),
	('$last_id','office','$office_street', '$office_city','$office_state','$office_zip','$office_mobile', '$office_landline', '$office_fax')";
		
		$con->query($sql2);
		
   $sql3 = "INSERT INTO communication(employee_id,communication) VALUES('$last_id',$communication)";
   
   		$con->query($sql3);
		
		echo "record inserted in address";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $con->error;	
	}
	
	$con->close();
?>