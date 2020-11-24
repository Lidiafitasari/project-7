<?php

namespace App;


class  Produk Extends Model{
	protected $table = 'produk';

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}
}