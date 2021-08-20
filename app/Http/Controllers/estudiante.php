<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\alumno;
use App\Models\alumnoGrado;
use Illuminate\Database\QueryException;

class estudiante extends Controller
{
    public function guardarRegistro(Request $request){

        try{
            DB::beginTransaction();
           // dd($request['sexo']);
            $guardarAlumno = new alumno;
            $guardarAlumno->identidad = $request['identidad'];
            $guardarAlumno->primer_nombre = $request['pNombre'];
            $guardarAlumno->segundo_nombre = $request['sNombre'];
            $guardarAlumno->primer_apellido = $request['pApellido'];
            $guardarAlumno->segundo_apellido = $request['sApellido'];
            $guardarAlumno->fecha_nacimiento = $request['fechaNacimiento'];
            $guardarAlumno->fecha_ingreso = $request['fechaIngreso'];
            $guardarAlumno->borrado = false;
            $guardarAlumno->sexo_id = $request['sexo'];
            $guardarAlumno->save();

            $grado = new alumnoGrado;
            $grado->alumno_id = $guardarAlumno->id;
            $grado->clase_id = $request['gradoValor'];
            $grado->grado_actual = true;
            $grado->save();

            DB::commit();
            return response()->json([
                'message'=>'Guardo con exito.',
                'color' => 'secces'
            ],200);
        }catch(QueryException $e){
            DB::rollback();
            return response()->json([
                'message'=>'Error, intente de nuevo.',
                'color' => 'error',
                'error' => $e
            ],402);
        }




    }

   public function mostrarRegistros(){

    try {
    
        $registros = DB::SELECT("
        select
        alumno.id as 'id',
        alumno.identidad,
        concat(alumno.primer_nombre, ' ', alumno.segundo_nombre, ' ',
        alumno.primer_apellido, ' ', alumno.segundo_apellido) as 'nombre_completo',
        alumno.fecha_nacimiento,
        alumno.fecha_ingreso,
            (select nombre from grado inner join alumnogrado 
            on alumnogrado.clase_id = grado.id
            where alumnogrado.grado_actual=1 and alumnogrado.alumno_id = alumno.id) as 'grado_actual',
            (select grado.id from grado inner join alumnogrado 
            on alumnogrado.clase_id = grado.id
            where alumnogrado.grado_actual=1 and alumnogrado.alumno_id = alumno.id) as 'grado_actual_id',
        if(alumno.borrado = 1, 'Eliminado','Activo' ) as estado       

        from
        alumno inner join alumnogrado
        on alumno.id = alumnogrado.alumno_id
        where alumnogrado.grado_actual=1
        ");
    
        return datatables()->of($registros)
        ->addColumn('acciones', function ($row) {
            $html ='
             

               <div class="dropdown">
                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Opciones
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#" onclick="modalEditarDesplegar('. $row->id .','.$row->grado_actual_id.')">Editar</a></li>
                    <li><a class="dropdown-item" href="#" onclick="confirmarBorrar(' . $row->id . ')">Eliminar </a></li>    
                </ul>
                </div>

            ';

            return $html;
        })
        ->rawColumns(['acciones'])
        ->make(true);    
        
    } catch (QueryException $e) {

        return response()->json([
            'message'=>'Error al cargar'
        ],402);
        
    }

   } 

   public function eliminarAlumno(Request $request)
   {
       try {

        $alumnoEditar= alumno::find($request['idEstudiante']);
        $alumnoEditar->borrado = true;
        $alumnoEditar->save();

        return response()->json([
            'message' => 'Eliminado con exito!',
            'color' => 'success'
        ],200);



          
       } catch (QueryException $e) {
            return response()->json([
                'message' => 'ha ocurrrido un error, intente de nuevo.',
                'error' => $e,
                'color' => 'error'
            ],402);
       }

   }

   public function obtenerDatosEstudiante($id){
       try {

        $alumno = DB::SELECT(" select
        identidad,
        alumno.id,
        primer_nombre,
        segundo_nombre,
        primer_apellido,
        segundo_apellido,
        sexo_id,
        fecha_nacimiento,
        fecha_ingreso,
        alumnogrado.clase_id
        from alumno
        inner join alumnogrado
        on alumno.id = alumnogrado.alumno_id
        where alumnogrado.grado_actual = true and alumno.id = ".$id);

        return response()->json([
            'alumno' => $alumno,

        ],200);

         
    } catch (QueryException $e) {

        return response()->json([
            'message' => 'ha ocurrrido un error, intente de nuevo.',
            'error' => $e,
            'color' => 'error'
        ],402);
           
       }

   }

   public function editarAlumno(Request $request){

  try {
    $alumnoEditar= alumno::find($request['idEstudiante']);
    $alumnoEditar->identidad = $request['identidad'];
    $alumnoEditar->primer_nombre = $request['pNombre'];
    $alumnoEditar->segundo_nombre = $request['sNombre'];
    $alumnoEditar->primer_apellido = $request['pApellido'];
    $alumnoEditar->segundo_apellido = $request['sApellido'];
    $alumnoEditar->fecha_nacimiento = $request['fechaNacimiento'];
    $alumnoEditar->fecha_ingreso = $request['fechaIngreso'];    
    $alumnoEditar->sexo_id = $request['sexo'];
    $alumnoEditar->save();

    return response()->json([
        'message' => "Registro actualizado con exito.",
        'color' => 'success',
        'icon' => 'success'
    ],200);

  } catch (QueryException $e) {
      return response()->json([
      'message' => 'ha ocurrrido un error, intente de nuevo.',
      'error' => $e,
      'color' => 'error'
      ],402);
  }
   }
}
