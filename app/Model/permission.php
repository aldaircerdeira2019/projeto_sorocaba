<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    
    public function roles()
    {
       
        return $this->belongsToMany('App\Model\Role', 'permission_roles', 'permission_id', 'role_id');
      
    }
}
