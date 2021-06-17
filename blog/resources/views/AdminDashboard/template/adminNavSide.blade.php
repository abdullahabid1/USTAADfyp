<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="{{url('/admin/'.session()->get('loginID')) }}" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="{{url('/admin/'.session()->get('loginID').'/tutors')}}" class=""><i class="lnr lnr-dice"></i> <span>Tutors</span></a></li>
						<li><a href="{{url('/admin/'.session()->get('loginID').'/students')}}" class=""><i class="lnr lnr-user"></i> <span>Students</span></a></li>
						<li><a href="{{url('/admin/'.session()->get('loginID').'/library')}}" class=""><i class="lnr lnr-book"></i> <span>Library</span></a></li>
						
					</ul>
				</nav>
			</div>
		</div>