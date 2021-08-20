<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    use HasFactory;
    protected $table = 'alumno';

    protected $primaryKey = 'id';//especifico la llave primaria, en este caso es entero incremental

    public $timestamps = true;

    protected $fillable = ['id', 'identidad',  'primer_nombre', 'segundo_nombre', 'primer_apellido',
     'segundo_apellido','fecha_nacimiento','fecha_ingreso','borrado','sexo_id','hora_inicio','hora_final','motivo'];
}
