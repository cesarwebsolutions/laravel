<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $table = 'store';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nome_fantasia',
        'cnpj',
        'rua',
        'numero',
        'complemento',
        'cidade',
        'estado',
        'telefone',
        'site',
        'email'
    ];
}
