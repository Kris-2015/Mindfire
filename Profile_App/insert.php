<?php
/*
 *Author  : mfsi_krishadev
 *purpose : Variable declaration and insertion of records.
 *category: insertion
*/


// Process the form data after the form has been submitted
if(isset($_POST['submit'])) {
    // variable declaration
    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
    
    $middle_name = isset($_POST['middle_name']) ? $_POST['middle_name'] : '';
    
    $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
    
    $prefix = isset($_POST['prefix']) ? $_POST['prefix'] : '';
    
    $dob = isset($_POST['dob']) ? $_POST['dob'] : '';
    
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    
    $marital_status = isset($_POST['marital_status']) ? $_POST['marital_status'] : '';
    
    $employer = isset($_POST['employer']) ? $_POST['employer'] : '';
    
    $employment = isset($_POST['employment']) ? $_POST['employment'] : '';
    
    $image = isset($_FILES['image']['name']) ? $_FILES['image']['name'] : '';
    
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
    
    $communication = implode(',', $_POST['communication']);
    /*echo '<pre>';

    print_r($_POST);exit;*/

    imageUpload($_FILES);
    
    //Insert operation in employee table
    $sql = "INSERT INTO employee(first_name, middle_name, last_name, prefix, dob, gender, marital_status, employer, employment, image) VALUES('$first_name' , '$middle_name' , '$last_name' , '$prefix' , '$dob' , '$gender' , '$marital_status' , '$employer' , '$employment' , '$image');";
    

    $result = mysqli_query($conn, $sql);
    
    if (TRUE === $result) {
        $employee_id = mysqli_insert_id($conn);
        
        
        $sql_2 = "INSERT INTO address(employee_id,type, street, city, state, zip, mobile, landline, fax) VALUES('$employee_id' ,'residence', '$home_street' , '$home_city' , '$home_state' , '$home_zip' , '$home_mobile' , '$home_landline' , '$home_fax'),('$employee_id' ,'office', '$office_street' , '$office_city' , '$office_state' , '$office_zip' , '$office_mobile' , '$office_landline' , '$office_fax');";
        
        $result = mysqli_query($conn, $sql_2);
        
        $sql_3 = "INSERT INTO communication(employee_id,type) VALUES('$employee_id','$communication')";
        
        $result = mysqli_query($conn, $sql_3);

        /*if($result == TRUE)
        {
        	header("Location:simple.php");
        }*/

       /* if ($error == false)
         {
        	$mess = '<div class="alert alert-success">You are registered!!</div>';
        }
        else
        {
        	$mess = '<div class="alert alert-danger">Error, try again</div>';
        }*/

    } else {
        echo "Error in data";
    }
    
}

mysqli_close($conn);
?>