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
    {{ HTML::style('/css/custom-icons.css') }}
    {{ HTML::style('/css/jquery-ui/jquery-ui.min.css') }}
    {{ HTML::style('/css/style.css') }}
    {{ HTML::script('/js/boekeenkerkzaal.js') }}

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
				<li class="{{ Request::is( 'testing1') ? 'active' : '' }}"><a href="{{ URL::to('testing1') }}"><i class="fa fa-tachometer menu-icon"></i><span class="menu-text">Dashboard</span></a></li>
				<li class="{{ Request::is( 'church') ? 'active' : '' }}"><a href="{{ URL::to('church') }}"><i class="fa icon-church menu-icon"></i><span class="menu-text">Kerkgegevens</span></a></li>
				<li class="{{ Request::is( 'room/*') ? 'open active' : '' }}">
					<a href="" class="dropdown-toggle"><i class="fa fa-sitemap menu-icon"></i><span class="menu-text">Zalen</span><i class="fa fa-angle-double-down dropdown-icon"></i></a>
					<ul class="submenu">
						@if (count($global_rooms) > 0)
						@foreach ($global_rooms as $global_room)
						<li class="{{ Request::is( 'room/'.$global_room->id) ? 'active' : '' }}"><a href="{{ URL::to('room/'.$global_room->id) }}"><i class="fa fa-angle-right submenu-icon"></i></span><p>{{ $global_room->roomname }}</p></a></li>
						@endforeach
						@else 
						<li><p id="no-rooms-found"><i class="fa fa-exclamation-triangle"></i> Er zijn geen zalen gevonden.</p></li>
						@endif

					</ul>	
				</li>
				<li class="{{ Request::is( '1subtest*') ? 'open active' : '' }}">
					<a href="" class="dropdown-toggle"><i class="fa fa-money menu-icon"></i><span class="menu-text">Offertes</span><i class="fa fa-angle-double-down dropdown-icon"></i></a>
					<ul class="submenu">
						<li class="{{ Request::is( '1subtest1') ? 'active' : '' }}"><a href="{{ URL::to('1subtest1') }}"><i class="fa fa-angle-right submenu-icon"></i><span>Overzicht</span></a></li>
						<li class="{{ Request::is( '1subtest2') ? 'active' : '' }}"><a href="{{ URL::to('1subtest2') }}"><i class="fa fa-angle-right submenu-icon"></i></span><span>Kostenposten</span></a></li>
					</ul>
				</li>
				<li class="{{ Request::is( 'testing5') ? 'active' : '' }}"><a href="{{ URL::to('testing5') }}"><i class="fa fa-users menu-icon"></i><span class="menu-text">Klanten</span></a></li>
				<li class="{{ Request::is( 'testing2') ? 'active' : '' }}"><a href="{{ URL::to('testing2') }}"><i class="fa fa-calendar menu-icon"></i><span class="menu-text">Agenda</span></a></li>
			</ul>
		</div>
		<div class="main-content">

			@if(Session::has('error'))
			<div class="col-md-12">
				<div class="alert alert-danger metro-style">
					{{ Session::get('error') }}
				</div>
			</div>
			@endif

			@if(Session::has('success'))
			<div class="col-md-12">
				<div class="alert alert-success metro-style">
					{{ Session::get('success') }}
				</div>
			</div>
			@endif
			
			@if(Session::has('warning'))
			<div class="col-md-12">
				<div class="alert alert-warning metro-style">
					{{ Session::get('warning') }}
				</div>
			</div>
			@endif

			@if($errors->has())
		    <div class="col-md-12">
		    	<div class="alert alert-danger metro-style">
		    		<p class="alert-heading">De volgende fouten zijn gevonden:</p>
		    		<ul>
			            @foreach($errors->all() as $message)	
			            <li>{{ $message }}</li>
			            @endforeach
			        </ul>
		    	</div>
		    </div>
			@endif
			

			@yield('content')	
		</div>
	@else

		@yield('content')

	@endif
	</div>

</body>
</html>