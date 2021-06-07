<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Edit Profile</title>
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
					<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="thumb-lg rounded-circle">
				</div>
				<h5 class="user-name">{{ $student->firstname }} {{ " " }} {{ $student->lastname }}</h5>
				<h6 class="user-email">{{ $student->email }}</h6>
			</div>
			<div class="about">
				<h5>About</h5>
				<p>{{ $student->about }}</p>
				<div class="text-left">
                            <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">{{ $student->firstname }} {{ " " }} {{ $student->lastname }}</span></p>
                            <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">{{ $student->phone }}</span></p>
                            <p class="text-muted font-13"><strong>City :</strong> <span class="m-l-15">{{ $student->city }}</span></p>
                        </div>
			
                       
				
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<form action = "/student/update" method = "POST" enctype="multipart/form-data">
		@method("PATCH")
		<div class="card-body">
			<h6 class="mb-2 text-primary">User image</h6>
									<table cellspacing="5" cellspacing="5" style="height: 10px ">
										<tr>
											<td >Select Photo:</td>
											<td><input type="file" id="myfile"  name="image" required></td>
		
										</tr>
									</table><br>
			<div class="row gutters">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h6 class="mb-2 text-primary">Personal Details</h6>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="fullName">First Name</label>
						<input type="text" class="form-control" name="firstname" placeholder="Enter first name" value = "{{ $student->firstname }}" required>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
					<label for="fullName">Last Name</label>
						<input type="text" class="form-control" name="lastname" placeholder="Enter last name" value = "{{ $student->lastname }}" required>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
					<label for="eMail">Email</label>
						<input type="email" class="form-control" id="email" placeholder="Enter email name" value = "{{ $student->email }}" required>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						
					<label for="website">Password</label>
						<input type="password" class="form-control" name="Password" placeholder="Password" value = "{{ $student->password}}" required>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="number" class="form-control" name="phone" placeholder="Enter phone number" value = "{{ $student->phone }}" required>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="website">About</label>
						<input type="text" class="form-control" name="about" placeholder="About Me" value = "{{ $student->about }}" required>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="website">Gender</label>
						<br>
						<label class="radio inline"> 
							<input type="radio" name="gender" value="male" checked="">
							<span> Male </span> 
						</label>
						<label class="radio inline"> 
							<input type="radio" name="gender" value="female">
							<span>Female </span> 
						</label>
					</div>
				</div>
			</div>

			<div class="row gutters">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h6 class="mt-3 mb-2 text-primary">Address</h6>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="Street">Street</label>
						<input type="name" class="form-control" name="street" placeholder="Enter Street" value = "{{ $student->street }}" required>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="ciTy">City</label>
						<input type="name" class="form-control" name="city" placeholder="Enter City" value = "{{ $student->city}}" required>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="sTate">State</label>
						<input type="text" class="form-control" name="state" placeholder="Enter State" value = "{{ $student->state }}" required>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="zIp">Zip Code</label>
						<input type="text" class="form-control" name="zip" placeholder="Zip Code" value = "{{ $student->zip }}" required>
					</div>
				</div>
			</div>
			<div class="row gutters">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h6 class="mt-3 mb-2 text-primary">Subject</h6>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="Subject">Subject 1</label>
						<input type="name" class="form-control" name="subject1" placeholder="Enter Subject" value = "{{ $student->subject1 }}" required>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="ciTy">Subject 2</label>
						<input type="name" class="form-control" name="subject2" placeholder=" Enter Subject" value = "{{ $student->subject2 }}" required>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="Subject">Subject 3</label>
						<input type="text" class="form-control" name="subject3" placeholder="Enter Subject" value = "{{ $student->subject3 }}" required>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="Subject">Subject 4</label>
						<input type="text" class="form-control" name="subject4" placeholder="EnterSubject" value = "{{ $student->subject4 }}" required>
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
						<input type="text" class="form-control" name="whatsapp" placeholder="Enter Whatsapp No." value = "{{ $student->whatsapp }}" required>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="fullName">Skype</label>
						<input type="text" class="form-control" name="skype" placeholder="Enter Skype ID/Email" value = "{{ $student->skype }}" required>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="eMail">Twitter</label>
						<input type="email" class="form-control" name="twitter" placeholder="Enter  Twitter ID" value = "{{ $student->twitter }}" required>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="phone">Instagram</label>
						<input type="text" class="form-control" name="instagram" placeholder="Enter Instagram ID" value = "{{ $student->instagram }}" required>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
						<label for="website">Facebook</label>
						<input type="url" class="form-control" name="facebook" placeholder="Enter Facebook ID" value = "{{ $student->facebook }}" required>
					</div>
				</div>
			</div>
			
				
			<div class="row gutters">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="text-right">
						<a href="/">
						<button type="button" id="" name="" class="btn btn-secondary">Cancel</button></a>
						<button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
</div>
</div>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>