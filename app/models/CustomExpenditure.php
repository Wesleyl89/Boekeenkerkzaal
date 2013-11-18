<?php

class CustomExpenditure extends Eloquent {

	protected $table = 'custom_expenditures';

	public $timestamps = true;

	public function church() 
	{
		return $this->belongsTo('church', 'church_id');
	}

}