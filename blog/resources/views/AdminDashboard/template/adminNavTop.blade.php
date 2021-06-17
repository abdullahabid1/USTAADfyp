<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="{{url('/')}}"><b>USTAAD</b></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search student, tutor, book">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				<div class="navbar-btn navbar-btn-right">
					<a class="btn btn-success update-pro" href="{{ url('/admin/'.session()->get('loginID').'/logout') }}" title="Logout"><i class="fa fa-rocket"></i> <span>Logout</span></a>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						
						<li class="">
							<a href="{{ url('/admin/'.session()->get('loginID')) }}" class=""><img src="{{asset('assets/admin/img/apple-icon.png')}}" class="img-circle" alt="Avatar"> <span>{{ session()->get('loginName') }}</span> <i class="icon-submenu lnr"></i></a>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>