<?php
ini_set('display_errors', '1');

$hostname = "localhost";
$username = "root";
$pass     = "mindfire";
$db_name  = "employee";


// Create connection

$conn = mysqli_connect($hostname, $username, $pass, $db_name);

// Check connection

if (!$conn) {
    die("Connection failed:" . mysqli_error());
}
//echo "Connected Successfully";

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
    
    $communication = implode(',', $_POST['communication']);

    include("image_upload.php");
    
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
//header('Location: list.php');
?>

<!DOCTYPE html>
<html>
   <head>
      <title>DISPLAY INFORMATION</title>
      <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   </head>
   <body>

   <h2><u>DISPLAY INFORMATION</u></h2>

  
   		<div class="table-responsive">
      		<table class="table table-bordered">
         		<thead>
            		<tr>
               			<td>First name</td>
               			<td>Middle_name</td>
               			<td>Last_name</td>
               			<td>Prefix</td>
               			<td>Gender</td>
               			<td>DOB</td>
               			<td>Marital Status</td>
               			<td>Employer</td>
               			<td>Employment</td>
               			<td>Picture</td>
               			<td>Official Address</td>
               			<td>Residential Address</td>
               			<td>Communication</td>
               			<td>Edit</td>
               			<td>Delete</td>
            		</tr>
         		</thead>
         		<tbody>
            	<?php
               		$conn = mysqli_connect($hostname, $username, $pass, $db_name);

               		//Display operation
               
               		$fetch = " SELECT *, (
                          select GROUP_CONCAT(street, ' ', city, ' ', zip) AS official_address FROM address addr WHERE type = 'office' AND addr.employee_id = e.id
                           ) as official_address,
                          (
	                      select GROUP_CONCAT(street, ' ', city, ' ', zip) AS official_address FROM address addrhome WHERE type = 'residence' AND addrhome.employee_id = e.id
                          ) AS residential_address,
                          (
                           SELECT type FROM communication c
                           WHERE c.employee_id = e.id
                          ) AS communication_medium
                          FROM employee e";
               
               
                         $result = mysqli_query($conn,$fetch);
               
                     	if(mysqli_num_rows($result) > 0)
                     	{
                         	//output of the data
                         	while($row = mysqli_fetch_assoc($result))
                         	{
                         		/*echo '<pre>';
                         		print_r($row);
                         		echo '</pre>';*/

			                  echo "<tr>";
			                   echo "<td>" . $row["first_name"]  ."</td>";
			                   echo "<td>" . $row["middle_name"]  ."</td>";
			                   echo "<td>" . $row["last_name"]  ."</td>";
			                   echo "<td>" . $row["prefix"]  ."</td>";
			                   echo "<td>" . $row["gender"]  ."</td>";
			                   echo "<td>" . $row["dob"]  ."</td>";
			                   echo "<td>" . $row["marital_status"]  ."</td>";
			                   echo "<td>" . $row["employer"]  ."</td>";
			                   echo "<td>" . $row["employment"]  ."</td>";
			                   echo "<td>" . $row["image"]  ."</td>";
			                   echo "<td>" . $row["official_address"]  ."</td>";
			                   echo "<td>" . $row["residential_address"]  ."</td>";
			                   echo "<td>" . $row["communication_medium"] . "</td>";
			                   echo "<td>" . "<a> Edit</a>";
			                   echo "<td>" . "<a> Delete</a>";

			                  echo "</tr>";
			                }
		                }
		                else
		                {
			                	echo "<br>Insert Record";
		                }
               		?>
         		</tbody>
      		</table>
 	</div>
   </body>
</html>



