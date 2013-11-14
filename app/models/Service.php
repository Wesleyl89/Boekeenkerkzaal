<?php

class Service extends Eloquent {

	protected $table = 'services';

	public $timestamps = true;

	public function church() 
	{
		return $this->belongsTo('church', 'church_id');
	}

}