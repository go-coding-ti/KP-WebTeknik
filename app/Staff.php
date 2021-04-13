<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Staff extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    protected $table = "staffs";
    public function prodi(){
        return $this->belongsTo('App\Prodi', 'id_prodi');
    }

}
