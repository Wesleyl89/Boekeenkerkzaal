<?php

class Attribute extends Eloquent {

	protected $table = 'attributes';

	public $timestamps = true;

	public function church() 
	{
		return $this->belongsTo('church', 'church_id');
	}

}