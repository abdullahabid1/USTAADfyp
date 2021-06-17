<!doctype html>
<html lang="en">

<head>
	<title>Tables | USTAAD</title>
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
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset ('assets/admin/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset ('assets/admin/img/favicon.png')}}">
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
					<h3 class="page-title">Students</h3>
					<div class="row">
						
						<div class="col-md-12">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"></h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>Full Name</th>
												<th>Contact No.</th>
												<th>Email</th>
												<th></th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											{{ $count = 0 }}
											@forelse($students as $student)
												{{ $count += 1 }}
												@include('AdminDashboard.template.studentRow', ["student" => $student, "count" => $count]);
											@empty
												{{ "no student found!" }}
											@endforelse
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
					</div>
					
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('assets/admin/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/admin/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('assets/admin/scripts/klorofil-common.js')}}"></script>
</body>

</html>
