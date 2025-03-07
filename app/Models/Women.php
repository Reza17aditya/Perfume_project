<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Women extends Model
{
    protected $table = 'womens';
    protected $guarded = ['created_at', 'updated_at'];
    protected $dates = ['created_at', 'updated_at'];
}
