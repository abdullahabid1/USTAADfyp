<!doctype html>
<html lang="en">

<head>
	<title>Elements | USTAAD</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/admin/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/admin/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('assets/admin/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('assets/admin/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/admin/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/admin/img/favicon.png')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		@include('AdminDashboard.template.adminNavTop')
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		@include('AdminDashboard.template.adminNavSide')
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Upload Book</h3>
					<div class="row">
						<div class="col-md-6">
							<!-- INPUTS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"></h3>
								</div>
								<div class="panel-body">
								<form action = "/admin/{admin}/uploadbook" method = "post" enctype="multipart/form-data">
									@csrf
									<label for="">Book Document</label>
									<input type="file" required class="" name = "file">
									<label for="">Display Picture</label>
									<input type="file" required class="" name = "image">
									<br>
									<label for="">Name</label>
									<input type="text" required class="form-control" name = "name" placeholder="Book Name">
									<br>
									<label for="">Discription</label>
									<textarea required class="form-control" placeholder="Book Discription" name = "discription" rows="4"></textarea>
									<br>
									<label for="">Price ($)</label>
									<input type="number" class="form-control" name = "price" placeholder="price">
									<br>
									<label for="">Paid</label>
									<label class="fancy-radio">
										<input name="paid" value="paid" type="radio">
										<span><i></i>Yes</span>
									</label>
									<label class="fancy-radio">
										<input checked name="paid" value="unpaid" type="radio">
										<span><i></i>No</span>
									</label>
									<br>
									<button type="submit" class = "btn btn-primary">Upload</button>
									</form>
									<a href="{{url('/admin/'.session()->get('loginID'))}}" class = "btn btn-default">Cancle</a>
								</div>
							</div>
							<!-- END INPUTS -->
							
						</div>
						
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('assets/admin/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/admin/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('assets/admin/scripts//klorofil-common.js')}}"></script>
</body>

</html>
