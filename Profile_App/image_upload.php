<?php
/*
 *Author  : mfsi_krishnadev
 *purpose : image upload operation
 *category: image uploading
*/

//fileUpload will perform image 
function imageUpload($file) {
	if (isset($file['image']))
    {
   		$errors     = array();
		$file_name  = $file['image']['name'];
		$file_size  = $file['image']['size'];
		$file_tmp   = $file['image']['tmp_name'];
		$file_type  = $file['image']['type'];
		$file_ext   = strtolower(end(explode('.',$file['image']['name'])));

		$extensions = array("jpeg","jpg","png");

		if(in_array($file_ext, $extensions) === false)
		{
	 		$errors[] = "extension not allowed, please choose a JPEG or PNG file.";
		}

		if (empty($errors))
		{
			if (move_uploaded_file($file_tmp, __DIR__ . "/profile/" . $file_name))
			{
			  echo "alert('Succesfully registered')";
			} 
			else
		    {
			  echo 'Error';
			}
		} 
		else
		{
		 print_r($errors);
		}
    }
}
?>
