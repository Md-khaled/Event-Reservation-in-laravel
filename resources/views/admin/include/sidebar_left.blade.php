<aside id="app_sidebar-left">
<div id="logo_wrapper">
	<ul>
		<li class="logo-icon">
			<a href="{{ route('admin.dashboard') }}">
				<div class="logo">
					<img src="{{asset('storage/app/public/profile')}}/logo.png" alt="Logo">
				</div>
				<h1 class="brand-text">{{Auth::user()->types}}</h1>
			</a>
		</li>
		<li class="menu-icon">
			<a href="javascript:void(0)" role="button" data-toggle-state="app_sidebar-menu-collapsed" data-key="leftSideBar">
				<i class="mdi mdi-backburger"></i>
			</a>
		</li>
	</ul>
</div>
<nav id="app_main-menu-wrapper" class="scrollbar">
	<div class="sidebar-inner sidebar-push">
		<ul class="nav nav-pills nav-stacked">
			<li class="sidebar-header">NAVIGATION</li>
			<li class="active"><a href="{{ route('admin.dashboard') }}"><i class="zmdi zmdi-view-dashboard"></i>Dashboard</a></li>
			@if(Auth::user()->role==0)
			<li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-view-quilt"></i>Manage District</a>
				<ul class="nav-sub">
					<li><a href="{{ route('admin.manage-district.index') }}">District-list</a></li>
				</ul>
			</li>
			<li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-view-quilt"></i>Manage Event</a>
				<ul class="nav-sub">
					<li><a href="{{ route('admin.manage-envent-type.index') }}">Event-list</a></li>
				</ul>
			</li>
			<li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-view-quilt"></i>Manage Venu</a>
				<ul class="nav-sub">
					<li><a href="{{ route('admin.manage-venu.index') }}">Venu-list</a></li>
				</ul>
			</li>
			<li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-view-quilt"></i>Manage Equipment</a>
				<ul class="nav-sub">
					<li><a href="{{ route('admin.manage-equipment.index') }}">Equipment-list</a></li>
				</ul>
			</li>
			<li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-view-quilt"></i>Manage Decoration</a>
				<ul class="nav-sub">
					<li><a href="{{ route('admin.manage-decoration.index') }}">Decoration-list</a></li>
				</ul>
			</li>
			<li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-view-quilt"></i>Manage Food</a>
				<ul class="nav-sub">
					<li><a href="{{ route('admin.manage-food.index') }}">Food-list</a></li>
				</ul>
			</li>
			<li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-view-quilt"></i>Manage Drinks</a>
				<ul class="nav-sub">
					<li><a href="{{ route('admin.manage-drinks.index') }}">Drinks-list</a></li>
				</ul>
			</li>
			<li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-view-quilt"></i>Manage Order</a>
				<ul class="nav-sub">
					<li><a href="{{ route('admin.manage-order.index') }}">Order-list</a></li>
				</ul>
			</li>
			
			<li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-view-quilt"></i>Comments</a>
				<ul class="nav-sub">
					<li><a href="{{ route('user.faq.create') }}">query-list</a></li>
				</ul>
			</li>
			@else
			<li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-view-quilt"></i>My Order</a>
				<ul class="nav-sub">
					<li><a href="{{ route('admin.manage-order.create') }}">My-order-list</a></li>
				</ul>
			</li>
			@endif
			<li><a href="{{ route('admin.profile.index') }}"><i class="zmdi zmdi-account"></i>Profile</a></li>
				
			</ul>
		</div>
	</nav>
</aside>
