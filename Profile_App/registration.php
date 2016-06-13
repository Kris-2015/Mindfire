<!DOCTYPE html>
<html>
    <head>
        <title>Registration Page</title>
        <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/imageUpload.css">
    <script type="text/javascript" src="js/image.js"></script>
    </head>
    <body class="body">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#registration"><span class="glyphicon glyphicon-user"></span>Sign-up</a></li>
                    <li><a href="#login"><span class="glyphicon glyphicon-user"></span>Login</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="well well-lg">
                        <form class="form-inline" role="form" method="POST" action="db_test.php">
                            <h2><u>PERSONAL INFORMATION</u></h2>
                            <div class="form-group">
                                <label for="fname">First Name:</label>
                                <input type="text" class="form-control" id="fname" name="first_name" placeholder="First Name" />
                            </div>
                            <div class="form-group">
                                <label for="mname">Middle Name:</label>
                                <input type="text" class="form-control" id="mname" name="middle_name" placeholder="First Name" /> 	
                            </div>
                            <div class="form-group">
                                <label for="lname">Last Name:</label>
                                <input type="text" class="form-control" id="lname" name="last_name" placeholder="First Name" /> 	
                            </div>
                            <br /><br />
                            <div class="form-group">
                                <label for="prefix" class="control-label col-lg-3">Prefix:</label>
                                <div class="col-lg-8">
                                    <label class="radio-inline"><input type="radio" name="prefix" value="mr"/>Mr</label>
                                    <label class="radio-inline"><input type="radio" name="prefix" value="mrs"/>Mrs</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gender" class="control-label col-lg-3">Gender:</label>
                                <div class="col-lg-8">
                                    <label class="radio-inline"><input type="radio" name="gender" value="male"/>Male</label>
                                    <label class="radio-inline"><input type="radio" name="gender" value="female"/>Female</label>
                                </div>
                            </div>
                            <br /><br />
                            <div class="form-group">
                                <label class="control-label col-lg-5" for="dob">Date of Birth:</label>
                                <div class="col-lg-6">
                                    <input type="date" id="dob" name="dob" class="form-control" />
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label col-lg-8" for="marital_status">Marital Status:</label>
                                    </div>
                                    <label class="radio-inline"><input type="radio" name="marital_status" value="single" />Single</label>
                                    <label class="radio-inline"><input type="radio" name="marital_status" value="married" />Married</label>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label col-lg-4" for="employment">Employment:</label>
                                        <div class="col-lg-8">
                                            <label class="radio-inline"><input type="radio" name="employment" value="employed" />Employed</label>
                                            <label class="radio-inline"><input type="radio" name="employment" value="unemployed" />Unemployed</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="form-group">
                                <label class="control-label col-lg-4" for="employer">Employer:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="employer" name="employer" placeholder="Employer" />
                                </div>
                            </div>
                            <br /><br />

                            <!-- Image Upload -->
							<div class="form-group">
								<label class="control-label col-xs-3">Image Upload:</label>
								<div class="col-xs-9">
								<div class="input-group image-preview">
									<input type="text" class="form-control image-preview-filename" disabled="disabled" >
										<span class="input-group-btn">
											<!-- Image preview-clear button -->

											<button type="button" class="btn btn-default image-preview-clear" style="display:none;">
												<span class="glyphicon glyphicon-remove"></span>Clear
											</button>
											<!-- image-preview-input -->

											<div class="btn btn-default image-preview-input">
												<span class="glyphicon glyphicon-folder-open"></span>
												<span class="image-preview-input-title">Browse</span>
												<input type="file" name="user_image" accept="image/png, image/jpeg, image/gif" />
											</div>
										</span>
								</div>
							</div>
							</div>
							
							<!-- Image Upload task ends -->
                            <br />
                            <hr class="hr" />
                            <div class="row">
                                <div class="col-lg-6">
                                    <h2><u>RESIDENCE ADDRESS</u></h2>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" for="home_street">Street:</label>
                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="home_street" name="home_street" placeholder="Street">
                                        </div>
                                    </div>
                                    <br><br>	
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" for="home_city">City:</label>
                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="home_city" name="home_city" placeholder="City">
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" for="home_state">State:</label>
                                        <div class="col-xs-8">
                                            <select class="form-control" id="home_state" name="home_state">
                                                <option value="">Select</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar"> Bihar</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="New Delhi">New Delhi</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="West Bengal">West Bengal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-4" for="home_zip">Zip:</label>
                                        <div class="col-xs-8">
                                            <input type="text" id="home_zip" name="home_zip" class="form-control" placeholder="Zip">
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="form-group">
                                        <label class="control-label col-xs-4" for="home_mobile">Mobile:</label>
                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="home_mobile" name="home_mobile" placeholder="9556412345">
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="form-group">
                                        <label class="control-label col-xs-4" for="home_landline">Landline:</label>
                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="home_landline" name="home_landline" placeholder="033505347">
                                        </div>
                                        <br>
                                    </div>
                                    <br><br>
                                    <div class="form-group">
                                        <label class="control-label col-xs-4" for="home_fax">Fax:</label>
                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="home_fax" name="home_fax" placeholder="44-444-4444">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h2><u>OFFICE ADDRESS</u></h2>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" for="office_street">Street:</label>
                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="office_street" name="office_street" placeholder="Street">
                                        </div>
                                    </div>
                                    <br>	
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" for="office_city">City:</label>
                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="office_city" name="office_city" placeholder="City">
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <div class="form-group">
                                    <label class="control-label col-xs-4" for="office_state">State:</label>
                                    <div class="col-xs-8">
                                        <select class="form-control" id="office_state" name="office_state">
                                            <option value="">Select</option>
                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar"> Bihar</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Chandigarh">Chandigarh</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="New Delhi">New Delhi</option>
                                            <option value="Odisha">Odisha</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Telangana">Telangana</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="Uttarakhand">Uttarakhand</option>
                                            <option value="West Bengal">West Bengal</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="control-label col-xs-4" for="office_zip">Zip:</label>
                                    <div class="col-xs-8">
                                        <input type="text" class="form-control" id="office_zip" name="office_zip" placeholder="Zip Code">
                                    </div>
                                </div>
                                <br><br>
                                <div class="form-group">
                                    <label class="control-label col-xs-4" for="office_mob">Mobile:</label>
                                    <div class="col-xs-8">
                                        <input type="text" class="form-control" id="office_mob" name="office_mob" placeholder="9556412345">
                                    </div>
                                </div>
                                <br><br>
                                <div class="form-group">
                                    <label class="control-label col-xs-4" for="office_ldline">Landline:</label>
                                    <div class="col-xs-8">
                                        <input type="text" class="form-control" id="office_ldline" name="office_landline" placeholder="33505347">
                                    </div>
                                    <br>
                                </div>
                                <br><br>
                                <div class="form-group">
                                    <label class="control-label col-xs-4" for="office_fax">Fax:</label>
                                    <div class="col-xs-8">
                                        <input type="text" class="form-control" id="office_fax" name="office_fax" placeholder="44-444-4444">
                                    </div>
                                </div>
                            </div>
                            <hr class="hr" />
                            <h2><u>OTHER DETAILS:</u></h2>
                            <br />
                            <div class="form-group">
                                <label class="control-label col-lg-3" for="comm">Preferred Communication:</label>
                                <div class="col-lg-9">
                                    <label class="checkbox-inline"><input type="checkbox" name="communication[]" value="mobile" />Mobile</label>
                                    <label class="checkbox-inline"><input type="checkbox" name="communication[]" value="sms" />SMS</label>
                                    <label class="checkbox-inline"><input type="checkbox" name="communication[]" value="email" />Email</label>
                                    <label class="checkbox-inline"><input type="checkbox" name="communication[]" value="other" />Other</label>
                                </div>
                            </div>
                            <div class="col-lg-9">
                            </div>
                    </div>
                    <div class="form-group" style="position:relative; left:35%;">
                    <div class="col-lg-12">
                    <button type="submit" class="btn btn-lg btn-info">Register</button>
                    <button type="reset" class="btn btn-lg btn-danger">Cancel</button>
                    </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>