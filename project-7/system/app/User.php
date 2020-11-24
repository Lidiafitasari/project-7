<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\userDetail;

class User extends Authenticatable
{
    protected $table = 'user';
    use Notifiable;

    function detail(){
    	return $this->hasOne(userDetail::class, 'id_user');
    }
}
