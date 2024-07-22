<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tratamento extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'photo',
        'descricao',
        'created_at',
        'updated_at'
    ];
}
