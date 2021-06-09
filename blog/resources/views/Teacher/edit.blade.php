<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>account setting or edit profile - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	
	
    <style type="text/css">
    	body {
    margin: 0;
    padding-top: 40px;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}
a {
	color : white;
}


    </style>	
	
	
</head>
<body>
<div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
				</div>
				<h5 class="user-name">{{$teacher->firstName." ".$teacher->lastName}}</h5>
				<h6 class="user-email">{{$teacher->email}}</h6>
			</div>
			<div class="about">
				<h5>About</h5>
				<p></p>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<form action="/teacher/{{$teacher->id}}" method="POST" enctype="multipart/form-data">
	@method("PATCH")
		@csrf
		<div class="card-body">
			<div class="row gutters">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h6 class="mb-2 text-primary">Personal Details</h6>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">

						<label for="fullName">First Name</label>
						<input type="text" class="form-control" id="fullName" value="{{$teacher->firstName}}" placeholder="Enter first name">
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="eMail">Last Name</label>
						<input type="text" class="form-control" id="eMail" value="{{$teacher->lastName}}"  placeholder="Enter last name">
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="number" class="form-control" id="phone" value="{{$teacher->phone}}" placeholder="Enter phone number">
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="website">Email</label>
						<input type="email" class="form-control" id="website" value="{{$teacher->email}}" placeholder="Enter email ID">
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="website">Password</label>
						<input type="password" class="form-control" id="website" value="{{$teacher->password}}" placeholder="Password">
					</div>
				</div>
			</div>
			
			<div class="row gutters" id="edu">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h6 class="mt-3 mb-2 text-primary">Profile Details</h6>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="Country">Profile Picture</label>
						<input type="file" id="Street" name="image">
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="ciTy">About</label>
						<input type="text" class="form-control" id="ciTy" name="about" placeholder="Write about yourself">
					</div>
				</div>
			</div>
			
			
			<div class="row gutters">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h6 class="mt-3 mb-2 text-primary">Address</h6>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="Country">Country</label>
						<input type="text" class="form-control" id="Street" name="country" placeholder="Enter Country">
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="ciTy">City</label>
						<input type="text" class="form-control" id="ciTy" name="city" placeholder="Enter City">
					</div>
				</div>
				
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="ciTy">Address</label>
						<input type="text" class="form-control" id="ciTy" name="address" placeholder="Enter Address">
					</div>
				</div>
			</div>
			
			<div class="row gutters" id="edu">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h6 class="mt-3 mb-2 text-primary">Qualification/Certification</h6>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<input type="text" class="form-control" id="Certification" name="qualification1" placeholder="Qualification/Certification (Required)" required>
						</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<input type="text" class="form-control" id="Certification" name="qualification2" placeholder="Qualification/Certification (Optional)">
						</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<input type="text" class="form-control" id="Certification" name="qualification3" placeholder="Qualification/Certification (Optional)">
						</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<input type="text" class="form-control" id="Certification" name="qualification4" placeholder="Qualification/Certification (Optional)">
						</div>
				</div>
			</div>
			
			<div class="row gutters" id="edu">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h6 class="mt-3 mb-2 text-primary">Subjects</h6>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<input type="text" class="form-control" name="subject1" id="Subjects" placeholder="Subject (Required)" required>
						</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<input type="text" class="form-control" name="subject2" id="Subjects" placeholder="Subject (Optional)">
						</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<input type="text" class="form-control" id="Subjects" name="subject3" placeholder="Subject (Optional)">
						</div>
				</div>
			</div>
			
			<div class="row gutters" id="edu">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h6 class="mt-3 mb-2 text-primary">Experience</h6>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<input type="text" class="form-control" name="experience1" id="Experience" placeholder="Experience (Optional)">
						</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<input type="text" class="form-control" name="experience2" id="Experience" placeholder="Experience (Optional)">
						</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<input type="text" class="form-control" name="experience3" id="Experience" placeholder="Experience (Optional)">
						</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<input type="text" class="form-control" name="experience4" id="Experience" placeholder="Experience (Optional)">
						</div>
				</div>
			</div>
			
			<div class="row gutters">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h6 class="mb-2 text-primary">Social Handles</h6>
				</div>
				
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="fullName">Whatsapp</label>
						<input type="text" class="form-control" name="whatsapp" id="fullName" placeholder="Enter Whatsapp No.">
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="fullName">Skype</label>
						<input type="text" class="form-control" name="skype" id="fullName" placeholder="Enter Skype ID/Email">
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="eMail">Twitter</label>
						<input type="text" class="form-control" name="twitter" id="eMail" placeholder="Enter  Twitter ID">
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="phone">Instagram</label>
						<input type="text" class="form-control" name="instagram" id="phone" placeholder="Enter Instagram ID">
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="website">Facebook</label>
						<input type="text" class="form-control" name="facebook" id="website" placeholder="Enter Facebook ID">
					</div>
				</div>
			</div>
			
			<div class="row gutters">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h6 class="mb-2 text-primary">Demo Lecture</h6>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<input type="text" class="form-control" name="demo" id="fullName" placeholder="Place youtube video link here">
					</div>
				</div>
			</div>
			
			<div class="row gutters">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="text-right">
						<a class="btn btn-secondary" href = "/teacher/{{$teacher->id}}/show/private">Cancel</a>
						<input type="submit" value="Update" id="submit"  class="btn btn-primary">
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
</div>
</div>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>