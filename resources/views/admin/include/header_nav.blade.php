<header id="app_topnavbar-wrapper">
			<nav role="navigation" class="navbar topnavbar">
				<div class="nav-wrapper">
					<ul class="nav navbar-nav pull-left left-menu">
						<li class="app_menu-open">
							<a href="javascript:void(0)" data-toggle-state="app_sidebar-left-open" data-key="leftSideBar">
								<i class="zmdi zmdi-menu"></i>
							</a>
						</li>
					</ul>
					<ul class="nav navbar-nav left-menu hidden-xs">
						<li>
							<a href="{{ route('home') }}" class="nav-link">
								<span>Home</span>
							</a>
						</li>
						
					</ul>
					<ul class="nav navbar-nav pull-right">
						<li class="dropdown avatar-menu">
							<a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
								<span class="meta">
									<span class="avatar">
										<img src="{{asset(Auth::user()->image)}}" alt="" class="img-circle max-w-35">
										<i class="badge mini success status"></i>
									</span>
									<span class="name">{{Auth::user()->name}}</span>
									<span class="caret"></span>
								</span>
							</a>
							<ul class="dropdown-menu btn-primary dropdown-menu-right">
								<li>
									<a href="{{ route('admin.profile.index') }}"><i class="zmdi zmdi-account"></i> Profile</a>
								</li>
								<li>
									<a href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"><i class="zmdi zmdi-sign-in"></i>{{ __('Sign Out') }}</a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<form role="search" action="#" class="navbar-form" id="navbar_form">
					<div class="form-group">
						<input type="text" placeholder="Search and press enter..." class="form-control" id="navbar_search" autocomplete="off">
						<i data-navsearch-close class="zmdi zmdi-close close-search"></i>
					</div>
					<button type="submit" class="hidden btn btn-default">Submit</button>
				</form>
			</nav>
		</header>