<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Codes extends Model
{
    protected $dates = [
        'created_at', 'updated_at'
    ];

    protected $fillable = [
        'code', 'status'
    ];
}
