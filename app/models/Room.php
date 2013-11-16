<?php

class Room extends Eloquent {

	protected $table = 'rooms';

	public $timestamps = true;

	public $rules = array(
							'roomname' 		   => 'required',
							'number_of_people' => 'required|integer'
						 );

	public function church()
	{
		return $this->belongsTo('church', 'church_id');
	}
	
}