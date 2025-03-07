<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Man extends Model
{
    protected $table = 'mans';
    protected $guarded = ['created_at', 'updated_at'];
    protected $dates = ['created_at', 'updated_at'];
}
