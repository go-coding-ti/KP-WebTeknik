<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Galeri extends Authenticatable
{
 Use SoftDeletes;   
}
