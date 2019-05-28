<!DOCTYPE html>
<html lang="en">
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
	
	<style>
		        body {
			     background: url('https://wallup.net/wp-content/uploads/2016/01/147474-space-Interstellar_movie-movies.jpg') fixed;
			    background-size: cover;
			}

			*[role="form"] {
			    max-width: 530px;
			    padding: 15px;
			    margin: 0 auto;
			    border-radius: 0.3em;
			    background-color: #f2f2f2;
			}

			*[role="form"] h2 { 
			    font-family: 'Open Sans' , sans-serif;
			    font-size: 40px;
			    font-weight: 600;
			    color: #000000;
			    margin-top: 5%;
			    text-align: center;
			    text-transform: uppercase;
			    letter-spacing: 4px;
			}


	
    </style>
    <title>Register Here!</title>
</head>
<body>
	<div class="container-fluid">
            <form action="register_new.php" method="POST" class="form-horizontal form-group bg-info" role="form">
                <h2>Registration</h2>
                <div class="form-group">
                    <label for="FullName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="fullName" placeholder="Full Name" class="form-control" autofocus required>
                    </div>
                </div>
		        <br>
                <div class="form-group">
                    <label for="userName" class="col-sm-3 control-label">User Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="userName" placeholder="User Name" class="form-control" autofocus required>
                    </div>
                </div>
		        <br>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" name="email" placeholder="Email" class="form-control" name= "email" required>
                    </div>
                </div>
		        <br>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                    </div>
                </div>
		        <br>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
                    <div class="col-sm-9">
                        <input type="password" name="cnfpassword" placeholder="Password" class="form-control" required>
                    </div>
                </div>
		        <br>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                    <div class="col-sm-9">
                        <input type="date" name="birthDate" class="form-control" required>
                    </div>
                </div>
		        <br>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" name="phoneNumber" placeholder="Phone number" class="form-control">
                    </div>
                </div>
		        <br>
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="genderRadio" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="genderRadio" value="Male">Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
                <button type="submit" class="col-6 mx-auto btn btn-lg btn-warning btn-block">Register</button>
            </form> 
        </div>
    
</body>
</html>
