<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    use HasFactory;

    protected $table = 'entrega';

    public $timestamps = false;
    protected $fillable = ['codigo','cidade','bairro','rua','numero'];
}
