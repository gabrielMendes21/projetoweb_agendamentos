<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nome',
        'Telefone',
        'Origem',
        'Observacao',
        'Data_contato'
    ];
}
