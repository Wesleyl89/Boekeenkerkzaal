<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Boek een Kerkzaal -- @yield('title')</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    {{ HTML::style('/css/style.css') }}
    {{ HTML::script('/js/sidebar.js') }}

</head>
<body>
	@if (Auth::check())
		<!-- Hier komt de navigatie enzo -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<a href="{{ URL::to('/') }}"><p class="navbar-left navbar-home">Boekeenkerkzaal</p></a>
		<a href="#"><p class="corner-button random-button"><i class="fa fa-exclamation-triangle"></i></p></a>
		<a href="#"><p class="corner-button settings-button"><i class="fa fa-cog"></i></p></a>
		<a href="{{ URL::to('logout') }}"><p class="corner-button logout-button"><i class="fa fa-power-off"></i></p></a>		
	</nav>

	<div class="main-container">
	
	
	<a href="" class="menu-toggler"><span class="menu-text"></span></a>
		<div class="sidebar">
			<ul class="nav nav-list">
				<li class="{{ Request::is( 'testing1') ? 'active' : '' }}"><a href="{{ URL::to('testing1') }}"><i class="fa fa-tachometer menu-icon"></i><span class="menu-text">test1</span></a></li>
				<li class="{{ Request::is( 'subtest*') ? 'open active' : '' }}">
					<a href="" class="dropdown-toggle"><i class="fa fa-laptop menu-icon"></i><span class="menu-text">test2</span><i class="fa fa-angle-double-down dropdown-icon"></i></a>
					<ul class="submenu">
						<li class="{{ Request::is( 'subtest1') ? 'active' : '' }}"><a href="{{ URL::to('subtest1') }}"><i class="fa fa-angle-right submenu-icon"></i></span><span>sub1</span></a></li>
						<li class="{{ Request::is( 'subtest2') ? 'active' : '' }}"><a href="{{ URL::to('subtest2') }}"><i class="fa fa-angle-right submenu-icon"></i></span><span>sub2</span></a></li>
						<li class="{{ Request::is( 'subtest3') ? 'active' : '' }}"><a href="{{ URL::to('subtest3') }}"><i class="fa fa-angle-right submenu-icon"></i></span><span>sub3</span></a></li>
						<li class="{{ Request::is( 'subtest4') ? 'active' : '' }}"><a href="{{ URL::to('subtest4') }}"><i class="fa fa-angle-right submenu-icon"></i></span><span>sub4</span></a></li>
					</ul>
				</li>
				<li class="{{ Request::is( 'testing3') ? 'active' : '' }}"><a href="{{ URL::to('testing3') }}"><i class="fa fa-calendar menu-icon"></i><span class="menu-text">test3</span></a></li>
				<li class="{{ Request::is( '1subtest*') ? 'open active' : '' }}">
					<a href="" class="dropdown-toggle"><i class="fa fa-cogs menu-icon"></i><span class="menu-text">test4</span><i class="fa fa-angle-double-down dropdown-icon"></i></a>
					<ul class="submenu">
						<li class="{{ Request::is( '1subtest1') ? 'active' : '' }}"><a href="{{ URL::to('1subtest1') }}"><i class="fa fa-angle-right submenu-icon"></i><span>sub1</span></a></li>
						<li class="{{ Request::is( '1subtest2') ? 'active' : '' }}"><a href="{{ URL::to('1subtest2') }}"><i class="fa fa-angle-right submenu-icon"></i></span><span>sub2</span></a></li>
						<li class="{{ Request::is( '1subtest3') ? 'active' : '' }}"><a href="{{ URL::to('1subtest3') }}"><i class="fa fa-angle-right submenu-icon"></i></span><span>sub3</span></a></li>
						<li class="{{ Request::is( '1subtest4') ? 'active' : '' }}"><a href="{{ URL::to('1subtest4') }}"><i class="fa fa-angle-right submenu-icon"></i></span><span>sub4</span></a></li>
					</ul>
				</li>
				<li class="{{ Request::is( 'testing5') ? 'active' : '' }}"><a href="{{ URL::to('testing5') }}"><i class="fa fa-glass menu-icon"></i><span class="menu-text">test5</span></a></li>
			</ul>
		</div>
		<div class="main-content">
			@yield('content')	
		</div>
	@else

		@yield('content')

	@endif
	</div>

</body>
</html>