@extends('master')

@section('title', 'Zaal creeeren')

@section('content')

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

<div class="col-md-6 col-md-offset-3">
	<div class="info-panel turquoise">
		<div class="info-panel-label turquoise"><p><i class="fa fa-pencil"></i> Zalen aanmaken</p></div>
		{{ Form::open(array('action' => array('RoomController@store'), 'class' => 'form-horizontal', 'role' => 'form')) }}
		<div class="form-group">
			<label for="roomname" class="control-label col-md-3">Zaal naam</label>
			<div class="col-md-9"><input type="text" class="form-control" name="roomname" placeholder="Naam" value="" /></div>
		</div>
		<div class="form-group">
			<label for="room_description" class="control-label col-md-3">Omschijving</label>
			<div class="col-md-9"><textarea type="text" class="form-control" rows="4" name="room_description" placeholder="Omschrijving" value=""></textarea></div>
		</div>
		<div class="form-group">
			<label for="number_of_people" class="control-label col-md-3">Max. aantal personen</label>
			<div class="col-md-9"><input type="text" class="form-control" name="number_of_people" placeholder="Aantal personen" value="" /></div>
		</div>

		<div class="form-group">
			<label for="price_range" class="control-label col-md-3">Prijs klasse in €</label>
			<div class="col-md-9">
				<div id="pricerangediv">
					<p id="p-min">€ 0</p>
					<p>-</p>
					<p id="p-max">€ 750</p>
				</div>
				<input type="hidden" id="min_amount" class="form-control col-md-1" name="min_price" value="0" />
				<input type="hidden" id="max_amount" class="form-control col-md-1" name="max_price" value="750" />
			</div>
		</div>
		<div class="col-md-9 col-md-offset-3">
			<div id="slider-range">
				<a href="#" id="min-slider"></a>
				<a href="#" id="max-slider"></a>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-3 col-md-offset-9"><button class="btn btn-info pull-right"><i class="fa fa-floppy-o"></i> Opslaan</button></div>
		</div>

		{{ Form::close() }}
	</div>
</div>

@stop