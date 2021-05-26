<!DOCTYPE html>
	<html>
	<head>
    @csrf
		<title>user login and registration</title>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="body.css"/>
	</head>
	<body>
	 <div class="container">
	 	<div class="login-box">
	 	<div class="row">
	 		<div class="col-md-6 login-left">
	 			<h2>Login Here</h2>
	 			<form action="users" method="post">
	 				<div class="form-group">
	 					<label>username</label>
	 					<input type="text" name="user" class="form-control" required>
	 				</div>
	<div class="form-group">
	 					<label>password</label>
	 					<input type="password" name="user" class="form-control"  required>
	 				</div>
	 				<button type="submit" class="btn btn-primary">login</button>
	 			</form>
	 		</div>
	 		<div class="col-md-6 login-right">
	 			<h2>Registration Here</h2>
	 			<form action="users" method="post">
                 
	 				<div class="form-group">
	 					<label>username</label>
	 					<input type="text" name="user" class="form-control" >
	 				</div>
	<div class="form-group">
	 					<label>password</label>
	 					<input type="password" name="user" class="form-control" required>
	 				</div>
	 				<button type="submit" class="btn btn-primary">registration</button>
	 			</form>
	 		</div>
	 	</div>
	 	
	 </div>
	</div>
	</body>
	</html>