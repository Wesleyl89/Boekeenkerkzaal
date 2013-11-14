@extends('master')

@section('content')

@if(Session::has('success'))
<div class="col-md-12">
	<div class="alert alert-success metro-style">
		{{ Session::get('success') }}
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

<div class="col-md-6">
	<div class="info-panel blue">
		<div class="info-panel-label blue"><p><i class="fa fa-globe"></i> Algemeen</p></div>
		{{ Form::open(array('url' => 'church/'.$church->id, 'class' => 'form-horizontal', 'role' => 'form')) }}
			<div class="form-group">
				<label for="churchname" class="control-label col-md-3">Kerk naam</label>
				<div class="col-md-9"><input type="text" class="form-control metro-style" name="churchname" value="{{ $church->churchname }}" /></div>
			</div>
			<div class="form-group">
				<label for="address" class="control-label col-md-3">Adres</label>
				<div class="col-md-9"><input type="text" class="form-control metro-style" name="address" value="{{ $church->address }}"></div>
			</div>
			<div class="form-group">
				<label for="zipcode" class="control-label col-md-3">Postcode</label>
				<div class="col-md-9"><input type="text" class="form-control metro-style" name="zipcode" value="{{ $church->zipcode }}"></div>
			</div>
			<div class="form-group">
				<label for="city" class="control-label col-md-3">Plaats</label>
				<div class="col-md-9"><input type="text" class="form-control metro-style" name="city" value="{{ $church->city }}"></div>
			</div>
			<div class="form-group">
				<label for="email" class="control-label col-md-3">Contact E-mail</label>
				<div class="col-md-9"><input type="text" class="form-control metro-style" name="email" value="{{ $church->email }}"></div>
			</div>
			<div class="form-group">
				<label for="website" class="control-label col-md-3">Website</label>
				<div class="col-md-9"><input type="text" class="form-control metro-style" name="website" value="{{ $church->website }}"></div>
			</div>

			<div class="form-group">
				<div class="col-md-3 col-md-offset-9"><button class="btn btn-primary pull-right">Opslaan</button></div>
			</div>

		{{ Form::close() }}
	</div>
</div>
<div class="col-md-6">
	<div class="church-info"></div>
</div>

@stop