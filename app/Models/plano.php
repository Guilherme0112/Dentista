<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plano extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'plano',
        'foto',
        'descricao',
        'valor',
        'assinatura',
        'created_at',
        'updated_at'
    ];

}
