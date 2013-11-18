@extends('master')

@section('title', 'Kerkgegevens')

@section('content')

@if($church != null) 
<div class="col-md-6">
	<div class="info-panel blue">
		<div class="info-panel-label blue"><p><i class="fa fa-globe"></i> Algemeen</p></div>
		{{ Form::open(array('action' => array('ChurchController@updateChurch', $church->id), 'class' => 'form-horizontal', 'role' => 'form')) }}
			<div class="form-group">
				<label for="churchname" class="control-label col-md-4">Kerk naam</label>
				<div class="col-md-8"><input type="text" class="form-control" name="churchname" value="{{ $church->churchname }}" /></div>
			</div>
			<div class="form-group">
				<label for="church_description" class="control-label col-md-4">Kerk beschrijving</label>
				<div class="col-md-8"><textarea type="text" class="form-control" rows="4" name="church_description" value="{{ $church->church_description }}">{{ $church->church_description }}</textarea></div>
			</div>
			<div class="form-group">
				<label for="address" class="control-label col-md-4">Adres</label>
				<div class="col-md-8"><input type="text" class="form-control" name="address" value="{{ $church->address }}"></div>
			</div>
			<div class="form-group">
				<label for="zipcode" class="control-label col-md-4">Postcode</label>
				<div class="col-md-8"><input type="text" class="form-control" name="zipcode" value="{{ $church->zipcode }}"></div>
			</div>
			<div class="form-group">
				<label for="city" class="control-label col-md-4">Plaats</label>
				<div class="col-md-8"><input type="text" class="form-control" name="city" value="{{ $church->city }}"></div>
			</div>
			<div class="form-group">
				<label for="email" class="control-label col-md-4">Contact E-mail</label>
				<div class="col-md-8"><input type="text" class="form-control" name="email" value="{{ $church->email }}"></div>
			</div>
			<div class="form-group">
				<label for="website" class="control-label col-md-4">Website</label>
				<div class="col-md-8"><input type="text" class="form-control" name="website" value="{{ $church->website }}"></div>
			</div>

			<div class="form-group">
				<div class="col-md-3 col-md-offset-9"><button class="btn btn-primary pull-right"><i class="fa fa-floppy-o"></i> Opslaan</button></div>
			</div>
		{{ Form::close() }}
	</div>

	<div class="info-panel red">
		<div class="info-panel-label red"><p><i class="fa fa-microphone"></i> Beeld & Geluid</p></div>	
		{{ Form::open(array('action' => array('ChurchController@updateAttributes', $church->id), 'class' => 'form-horizontal', 'role' => 'form')) }}
		<div class="form-group">
			<label class="col-md-6 control-label">Microfoons</label>
			<div class="col-md-6 custom-checkbox red">
				<input type="checkbox" id="microphone" name="microphone" value="1" @if($church->attribute->microphone == 1) checked @endif  />
				<label for="microphone"><i class="fa fa-bars fa-rotate-90"></i></label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-6 control-label">Draadloze microfoons</label>
			<div class="col-md-6 custom-checkbox red">
				<input type="checkbox" id="wireless_mic" name="wireless_mic" value="1" @if($church->attribute->wireless_mic == 1) checked @endif  />
				<label for="wireless_mic"><i class="fa fa-bars fa-rotate-90"></i></label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-6 control-label">Ringleiding</label>
			<div class="col-md-6 custom-checkbox red">
				<input type="checkbox" id="audio_induction_loop" name="audio_induction_loop" value="1" @if($church->attribute->audio_induction_loop == 1) checked @endif  />
				<label for="audio_induction_loop"><i class="fa fa-bars fa-rotate-90"></i></label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-6 control-label">Opname mogelijkheid</label>
			<div class="col-md-6 custom-checkbox red">
				<input type="checkbox" id="recording" name="recording" value="1" @if($church->attribute->recording == 1) checked @endif  />
				<label for="recording"><i class="fa fa-bars fa-rotate-90"></i></label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-6 control-label">Mixers</label>
			<div class="col-md-6 custom-checkbox red">
				<input type="checkbox" id="mixers" name="mixers" value="1" @if($church->attribute->mixers == 1) checked @endif  />
				<label for="mixers"><i class="fa fa-bars fa-rotate-90"></i></label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-6 control-label">Beamers</label>
			<div class="col-md-6 custom-checkbox red">
				<input type="checkbox" id="beamers" name="beamers" value="1" @if($church->attribute->beamers == 1) checked @endif  />
				<label for="beamers"><i class="fa fa-bars fa-rotate-90"></i></label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-6 control-label">Schermen</label>
			<div class="col-md-6 custom-checkbox red">
				<input type="checkbox" id="screens" name="screens" value="1" @if($church->attribute->screens == 1) checked @endif  />
				<label for="screens"><i class="fa fa-bars fa-rotate-90"></i></label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-6 control-label">TV</label>
			<div class="col-md-6 custom-checkbox red">
				<input type="checkbox" id="tv" name="tv" value="1" @if($church->attribute->tv == 1) checked @endif  />
				<label for="tv"><i class="fa fa-bars fa-rotate-90"></i></label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-6 control-label">Print mogelijkheden</label>
			<div class="col-md-6 custom-checkbox red">
				<input type="checkbox" id="printing" name="printing" value="1" @if($church->attribute->printing == 1) checked @endif  />
				<label for="printing"><i class="fa fa-bars fa-rotate-90"></i></label>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-3 col-md-offset-9"><button class="btn btn-danger pull-right"><i class="fa fa-floppy-o"></i> Opslaan</button></div>
		</div>
		{{ Form::close() }}
	</div>
</div>
<div class="col-md-6">
	<div class="info-panel orange">
		<div class="info-panel-label orange"><p><i class="fa fa-flag"></i> Voorzieningen</p></div>	
		{{ Form::open(array('action' => array('ChurchController@updateServices', $church->id), 'class' => 'form-horizontal', 'role' => 'form')) }}
		<div class="form-group">
			<label class="col-md-6 control-label">Horecavergunning</label>
			<div class="col-md-6 custom-checkbox orange">
				<input type="checkbox" id="catering_license" name="catering_license" value="1" @if($church->service->catering_license == 1) checked @endif  />
				<label for="catering_license"><i class="fa fa-bars fa-rotate-90"></i></label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-6 control-label">Catering</label>
			<div class="col-md-6 custom-checkbox orange">
				<input type="checkbox" id="catering" name="catering" value="1" @if($church->service->catering == 1) checked @endif  />
				<label for="catering"><i class="fa fa-bars fa-rotate-90"></i></label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-6 control-label">Invalide voorzieningen</label>
			<div class="col-md-6 custom-checkbox orange">
				<input type="checkbox" id="handicap_services" name="handicap_services" value="1" @if($church->service->handicap_services == 1) checked @endif  />
				<label for="handicap_services"><i class="fa fa-bars fa-rotate-90"></i></label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-6 control-label">Eigen parkeerplaatsen</label>
			<div class="col-md-6 custom-checkbox orange">
				<input type="checkbox" id="parking" name="parking" value="1" @if($church->service->parking == 1) checked @endif  />
				<label for="parking"><i class="fa fa-bars fa-rotate-90"></i></label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-6 control-label">Wifi</label>
			<div class="col-md-6 custom-checkbox orange">
				<input type="checkbox" id="wifi" name="wifi" value="1" @if($church->service->wifi == 1) checked @endif  />
				<label for="wifi"><i class="fa fa-bars fa-rotate-90"></i></label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-6 control-label">Kerkmeubilair verplaatsbaar</label>
			<div class="col-md-6 custom-checkbox orange">
				<input type="checkbox" id="furniture_movable" name="furniture_movable" value="1" @if($church->service->furniture_movable == 1) checked @endif  />
				<label for="furniture_movable"><i class="fa fa-bars fa-rotate-90"></i></label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-6 control-label">Plaatsen podium</label>
			<div class="col-md-6 custom-checkbox orange">
				<input type="checkbox" id="stage" name="stage" value="1" @if($church->service->stage == 1) checked @endif  />
				<label for="stage"><i class="fa fa-bars fa-rotate-90"></i></label>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-3 col-md-offset-9"><button class="btn btn-warning pull-right"><i class="fa fa-floppy-o"></i> Opslaan</button></div>
		</div>
		{{ Form::close() }}
	</div>
	<div class="info-panel turquoise">
		<div class="info-panel-label turquoise"><p><i class="fa fa-sitemap"></i> Zalen</p></div>
		<div class="col-md-12">
			<a href="{{ URL::to('room/create') }}"><button class="btn btn-info" id="create-room-button">Nieuwe zaal aanmaken</button></a>
			<ul class="room-list">
			@foreach ($rooms as $room)
				<li>
					<a href="{{ URL::to('room/'.$room->id) }}"><i class="fa fa-angle-double-right room-list-icon"></i> {{ $room->roomname }}</a>
					<a href="#" class="room-delete-button"><i class="fa fa-trash-o"></i></a>
					<div class="confirm-dialog">
						<p>Weet u zeker dat u "{{ $room->roomname }}" wilt verwijderen?</p>
						<a href="{{ URL::to('room/delete/'.$room->id) }}"><button class="btn btn-success"><i class="fa fa-check"></i></button></a>
						<button class="btn btn-danger cancel-delete"><i class="fa fa-ban"></i></button>
					</div>
				</li>
			@endforeach
			</ul>
		</div>
		<div class="clearfix"></div>
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