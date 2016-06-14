<?php
	include('db_conn.php');

	//Deleting the data from the database
	$employee_id = $_GET['emp_id'];

	$query = "DELETE employee, address, communication FROM employee
			  INNER JOIN  address ON employee.id = address.employee_id
			  LEFT JOIN  communication ON employee.id = address.employee_id
			  WHERE employee.id=$employee_id";

    $result = mysqli_query($conn, $query);

    if(TRUE === $result)
    {
    	header('Location:db_test.php');
    }
?>