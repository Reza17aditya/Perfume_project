<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{
    protected $table = 'abouts';
    protected $guarded = ['created_at', 'updated_at'];
    protected $dates = ['created_at', 'updated_at'];
}
