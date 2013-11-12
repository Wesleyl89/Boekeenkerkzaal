@extends('master')

@section('title', 'Login')

@section('content')

	<div class="row login">
		<div class="col-md-2 col-md-offset-5">
			<div class="well metro-style clearfix">
				<legend>Inloggen</legend>
				{{ Form::open(array('url' => 'login')) }}

				@if (Session::has('login_error'))
			        <div class="alert alert-danger">{{ Session::get('login_error') }}</div>
			    @endif
			    <div class="input-group margin-bottom-5px">
			    	<span class="input-group-addon input-icon metro-style"><span class="glyphicon glyphicon-user"></span></span>
					{{ Form::text('username', '', array('class' => 'form-control metro-style', 'placeholder' => 'Gebruikersnaam')) }}
				</div>
				<div class="input-group margin-bottom-5px">
					<span class="input-group-addon input-icon metro-style"><span class="glyphicon glyphicon-lock"></span></span>
					{{ Form::password('password', array('class' => 'form-control metro-style', 'placeholder' => 'Wachtwoord')) }}
				</div>
					{{ Form::submit('Inloggen', array('class' => 'btn btn-success btn-lg pull-right margin-bottom-5px', 'id' => 'login-button')) }}
				{{ Form::close() }}
			</div>
		</div>		
	</div>

@stop