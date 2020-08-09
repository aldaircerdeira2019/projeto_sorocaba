<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class mensagem extends Model
{
    protected $fillable = ['nome_contato','email_contato','mensagem'];
}
