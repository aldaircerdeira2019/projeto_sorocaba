<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class permission_role extends Model
{
    protected $fillable = [
        'permission_id', 'role_id' 
    ];
}
