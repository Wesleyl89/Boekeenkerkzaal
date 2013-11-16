<?php

class Church extends Eloquent {

	protected $table = 'churches';

	public $timestamps = true;

	public $rules = array(
							'churchname' => 'required',
							'address'	 => 'required',
							'zipcode'	 => 'required|max:7',
							'city'		 => 'required',
							'email'		 => 'email'
						 );

	public function user()
	{
		return $this->belongsTo('user', 'user_id');
	}

	public function service()
	{
		return $this->hasOne('service', 'church_id');
	}

	public function attribute()
	{
		return $this->hasOne('attribute', 'church_id');
	}

	public function room()
	{
		return $this->hasMany('room', 'church_id');
	}
	
}