<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Header extends Authenticatable
{
    use SoftDeletes;
    protected $table = 'headers';
    public function menu(){
        return $this->hasMany('App\Menu', 'id_header');
    }
}
