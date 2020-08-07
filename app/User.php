<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Model\permission;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /** função para retornar todas as funções vinculados a entidade user */
    public function roles()
    {
        return $this->belongsToMany('App\Model\Role', 'role_users', 'user_id', 'role_id');
    }

    /** Função verificar se poussui funções ou não , retorna true ou false */
    public function hasAnyRules($roles)
    {
        //dd($roles);
        if(is_array($roles) || is_object($roles))
        {   
            /** caount retorna a qtd, e !! transforna em true ou false */
            return !! $roles->intersect($this->roles)->count();
        }
        return $this->rules->contains('name', $roles);
    }

    public function hasPermission(permission $permission)
    { 
        // dd( $this->hasAnyRules($permission->rules));
        return $this->hasAnyRules($permission->roles);
    }
}
