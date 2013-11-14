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

@if($church != null) 
<div class="col-md-6">
	<div class="info-panel blue">
		<div class="info-panel-label blue"><p><i class="fa fa-globe"></i> Algemeen</p></div>
		{{ Form::open(array('action' => array('ChurchController@updateChurch', $church->id), 'class' => 'form-horizontal', 'role' => 'form')) }}
			<div class="form-group">
				<label for="churchname" class="control-label col-md-3">Kerk naam</label>
				<div class="col-md-9"><input type="text" class="form-control" name="churchname" value="{{ $church->churchname }}" /></div>
			</div>
			<div class="form-group">
				<label for="church_description" class="control-label col-md-3">Kerk beschrijving</label>
				<div class="col-md-9"><textarea type="text" class="form-control" rows="4" name="church_description" value="{{ $church->church_description }}">{{ $church->church_description }}</textarea></div>
			</div>
			<div class="form-group">
				<label for="address" class="control-label col-md-3">Adres</label>
				<div class="col-md-9"><input type="text" class="form-control" name="address" value="{{ $church->address }}"></div>
			</div>
			<div class="form-group">
				<label for="zipcode" class="control-label col-md-3">Postcode</label>
				<div class="col-md-9"><input type="text" class="form-control" name="zipcode" value="{{ $church->zipcode }}"></div>
			</div>
			<div class="form-group">
				<label for="city" class="control-label col-md-3">Plaats</label>
				<div class="col-md-9"><input type="text" class="form-control" name="city" value="{{ $church->city }}"></div>
			</div>
			<div class="form-group">
				<label for="email" class="control-label col-md-3">Contact E-mail</label>
				<div class="col-md-9"><input type="text" class="form-control" name="email" value="{{ $church->email }}"></div>
			</div>
			<div class="form-group">
				<label for="website" class="control-label col-md-3">Website</label>
				<div class="col-md-9"><input type="text" class="form-control" name="website" value="{{ $church->website }}"></div>
			</div>

			<div class="form-group">
				<div class="col-md-3 col-md-offset-9"><button class="btn btn-primary pull-right">Opslaan</button></div>
			</div>
		{{ Form::close() }}
	</div>
</div>
<div class="col-md-6">
	<div class="info-panel orange">
		<div class="info-panel-label orange"><p><i class="fa fa-flag"></i> Voorzieningen</p></div>	
		{{ Form::open(array('action' => array('ChurchController@updateServices', $church->id), 'class' => 'form-horizontal', 'role' => 'form')) }}
		<div class="form-group">
			<label class="col-md-5 control-label">Horecavergunning</label>
			<div class="col-md-7 custom-checkbox orange">
				<input type="checkbox" id="catering_license" name="catering_license" value="1" @if($church->service->catering_license == 1) checked @endif  />
				<label for="catering_license"></label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-5 control-label">Catering</label>
			<div class="col-md-7 custom-checkbox orange">
				<input type="checkbox" id="catering" name="catering" value="1" @if($church->service->catering == 1) checked @endif  />
				<label for="catering"></label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-5 control-label">Invalide voorzieningen</label>
			<div class="col-md-7 custom-checkbox orange">
				<input type="checkbox" id="handicap_services" name="handicap_services" value="1" @if($church->service->handicap_services == 1) checked @endif  />
				<label for="handicap_services"></label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-5 control-label">Eigen parkeerplaatsen</label>
			<div class="col-md-7 custom-checkbox orange">
				<input type="checkbox" id="parking" name="parking" value="1" @if($church->service->parking == 1) checked @endif  />
				<label for="parking"></label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-5 control-label">Wifi</label>
			<div class="col-md-7 custom-checkbox orange">
				<input type="checkbox" id="wifi" name="wifi" value="1" @if($church->service->wifi == 1) checked @endif  />
				<label for="wifi"></label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-5 control-label">Kerkmeubilair verplaatsbaar</label>
			<div class="col-md-7 custom-checkbox orange">
				<input type="checkbox" id="furniture_movable" name="furniture_movable" value="1" @if($church->service->furniture_movable == 1) checked @endif  />
				<label for="furniture_movable"></label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-5 control-label">Plaatsen podium</label>
			<div class="col-md-7 custom-checkbox orange">
				<input type="checkbox" id="stage" name="stage" value="1" @if($church->service->stage == 1) checked @endif  />
				<label for="stage"></label>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-3 col-md-offset-9"><button class="btn btn-warning pull-right">Opslaan</button></div>
		</div>
		{{ Form::close() }}
	</div>
</div>

@else
<div class="col-md-12">
	<div class="alert alert-danger metro-style">
		<p>Er is geen kerk gevonden voor deze gebruiker.</p>
	</div>
</div>
@endif

@stop