<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use SoftDeletes;
    protected $guard = 'admin';

    public $timestamps = false;

    protected $fillable = [
        'username',
        'password',
    ];
}
