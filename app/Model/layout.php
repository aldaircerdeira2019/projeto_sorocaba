<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class layout extends Model
{
    protected $fillable = ['nome_jogo','texto_destaque','frase','descri_form', 'background'];

    public function getAvatarImageAttribute($value) {
        return asset($this->background);
    }
    
    public function setBackgroundAttribute($value) {
        $filename = date('Y-m-d').'_background_'. $value->getClientOriginalName();
        $filepath = 'assets/upload/layout/';
        $image= $value;
        if ($value->isValid()) {
           $image->move(public_path($filepath) , $filename);
        }
        $this->attributes['background'] = $filepath.$filename;
    }
        
}
