<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $fillable = [
        'name', 'descri' 
    ];


    public function permission()
    {
        return $this->belongsToMany('App\Model\Permission', 'permission_roles', 'role_id', 'permission_id');

    }

    public function usuarios()
    {
       
        return $this->belongsToMany('App\User', 'role_users', 'role_id', 'user_id');
        
    }
}
