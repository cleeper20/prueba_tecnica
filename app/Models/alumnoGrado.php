<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumnoGrado extends Model
{
    use HasFactory;
    protected $table = 'alumnoGrado';

   

    public $timestamps = true;

    protected $fillable = ['alumno_id', 'clase_id'];
}
