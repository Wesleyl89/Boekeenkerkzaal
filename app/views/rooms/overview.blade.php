@extends('master')

@section('title', $room->roomname)

@section('content')
<script>
	$( '#slider-range' ).slider({

		values: [ 200, 1500 ]
	});
</script>

<div class="col-md-6">
	<div class="info-panel turquoise">
		<div class="info-panel-label turquoise"><p><i class="fa fa-sitemap"></i> {{ $room->roomname }}</p></div>
		{{ Form::open(array('action' => array('RoomController@updateRoom', $room->id), 'class' => 'form-horizontal', 'role' => 'form')) }}
		<div class="form-group">
			<label for="roomname" class="control-label col-md-3">Zaal naam</label>
			<div class="col-md-9"><input type="text" class="form-control" name="roomname" placeholder="Naam" value="{{ $room->roomname }}" /></div>
		</div>
		<div class="form-group">
			<label for="room_description" class="control-label col-md-3">Omschijving</label>
			<div class="col-md-9"><textarea type="text" class="form-control" rows="4" name="room_description" placeholder="Omschrijving" value="{{ $room->room_description }}">{{ $room->room_description }}</textarea></div>
		</div>
		<div class="form-group">
			<label for="number_of_people" class="control-label col-md-3">Max. aantal personen</label>
			<div class="col-md-9"><input type="text" class="form-control" name="number_of_people" placeholder="Aantal personen" value="{{ $room->number_of_people }}" /></div>
		</div>

		<div class="form-group">
			<label for="price_range" class="control-label col-md-3">Prijs klasse in €</label>
			<div class="col-md-9">
				<div id="pricerangediv">
					<p id="p-min">€ {{ $room->min_price }}</p>
					<p>-</p>
					<p id="p-max">€ {{ $room->max_price }}</p>
				</div>
				<input type="hidden" id="min_amount" class="form-control col-md-1" name="min_price" value="{{ $room->min_price }}" />
				<input type="hidden" id="max_amount" class="form-control col-md-1" name="max_price" value="{{ $room->max_price }}" />
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