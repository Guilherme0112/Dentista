<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pergunta extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'resposta',
        'created_at',
        'updated_at'
    ];
}
