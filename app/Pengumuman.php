<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pengumuman extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    protected $table = 'pengumumans';
    public function kategori(){
        return $this->belongsTo('App\PengumumanKategori', 'id_kategori');
    }
}
