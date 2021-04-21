<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Manajemen extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    public function staf(){
        return $this->belongsTo('App\Staff', 'id_staf');
    }

    public function jabatan(){
        return $this->belongsTo('App\Jabatan', 'id_jabatan');
    }
}
