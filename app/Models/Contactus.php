<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    protected $table = 'contactuses';
    protected $guarded = ['created_at', 'updated_at'];
    protected $dates = ['created_at', 'updated_at'];
}
