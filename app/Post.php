<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Post extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    public function kategori(){
        return $this->belongsTo('App\Kategori', 'id_kategori');
    }
}
