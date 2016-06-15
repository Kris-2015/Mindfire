<?php
/*
 *Author:mfsi_krishnadev
 *importing files: database connection, image upload & insertion operation
 *purpose: listing of data from the database
*/

ini_set('display_errors', '1');

include('db_conn.php');
include('image_upload.php');
require('insert.php');
?>

<!DOCTYPE html>
<html>
   <head>
      <title>DISPLAY INFORMATION</title>
      <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/display.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   </head>
   <body>
      <h2 class="h2"><u>REGISTERED USERS</u></h2>
      <div class="row">
         <div class="col-xs-12">
            <form method="POST">
               <div class="table-responsive">
                  <table class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <td>Name</td>
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
                           			$image = $row["image"];

                                echo "<tr>";
                                echo "<td>" . $row["first_name"]." ".$row["middle_name"]." ". $row["last_name"] ."</td>";
                                echo "<td>" . $row["prefix"]  ."</td>";
                                echo "<td>" . $row["gender"]  ."</td>";
                                echo "<td>" . $row["dob"]  ."</td>";
                                echo "<td>" . $row["marital_status"]  ."</td>";
                                echo "<td>" . $row["employer"]  ."</td>";
                                echo "<td>" . $row["employment"]  ."</td>";
                           
                                if (!empty($image))
                                {
                                	echo "<td>" . "<img src='profile/$image' width='45' height='45'>"  ."</td>";	
                                }
                                else
                                {
                                	echo "<td> no image </td>";
                                }
                                echo "<td>" . $row["official_address"]  ."</td>";
                                echo "<td>" . $row["residential_address"]  ."</td>";
                                echo "<td>" . $row["communication_medium"] . "</td>";
                                echo "<td>" . "<button type='submit'><a href='edit.php/?&emp_id=" . $row['id'] . "'>Edit</a></button></td>";
                                echo "<td>" . "<button type='submit'><a href='delete.php?emp_id=" . $row['id'] ."'>Delete</a></button></td>";
                           
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
            </form>
         </div>
      </div>
   </body>
</html>



