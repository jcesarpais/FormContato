<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;

class Contato extends Model
{
    use HasFactory;
    
    public $fillable = [
        'nome',
        'email',
        'telefone',
        'assunto',
        'mensagem'
    ];

        
}
