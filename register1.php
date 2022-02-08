
<!DOCTYPE html>
<html lang="en">
   <head>
        <meta charset="UTF-8">
		 <title>Sign Up</title>
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		 </head>
		 </body>
		 <from action="insert.php" method="POST">
		        <div class="container">
				  <div class="row">
				      <div class="col-md-12">
					        <h2>Register</h2>
							<p>Please fill this form to create an account.</p>
							<form action="" method="post">
							<div class="form-group">
							   <label>Name</lable>
							   <input type="text" name ="name" class="form-control" required>
					        </div>
							
							<div class="form-group">
							   <label>Rollno</lable>
							   <input type="text" name ="rollno" class="form-control" required>
					        </div>
							
							<div class="form-group">
							   <label>Course Name</lable>
							   <input type="text" name ="coursename" class="form-control" required>
					        </div>
							
							<div class="form-group">
							   <label>Email</lable>
							   <input type="email" name ="email" class="form-control" required>
					        </div>
							
							<div class="form-group">
							   <label>Password</lable>
							   <input type="password" name ="password" class="form-control" required>
					        </div>
							
							<div class="form-group">
							   <label>Submit</lable>
							   <input type="submit" name ="submit" class="btn btn-primary" value="submit">
					        </div>
							
					<p>Already have an account? <a href="Login.php">Login here</a>.</p>
					</form>
					</div>
					</div>
					</div>
					</body>
					</html>