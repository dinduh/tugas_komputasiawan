<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masiswa extends Model
{
    protected $fillable = ['nim', 'nama', 'jurusan', 'fakultas', 'univ'];
    
}
