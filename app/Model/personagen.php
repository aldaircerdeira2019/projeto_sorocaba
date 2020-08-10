<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class personagen extends Model
{
    protected $fillable = ['nome_personagem','avatar','descri_personagem']; 

    public function getAvatarImageAttribute($value) {
        return asset($this->background);
    }
    
    public function setAvatarAttribute($value) {
        $filename = date('Y-m-d').'_background_'. $value->getClientOriginalName();
        $filepath = 'assets/upload/personagem/';
        $avatar= $value;
        if ($value->isValid()) {
           $avatar->move(public_path($filepath) , $filename);
        }
        $this->attributes['avatar'] = $filepath.$filename;
    }
}
