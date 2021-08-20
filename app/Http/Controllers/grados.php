<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Doctrine\DBAL\Query\QueryException;
class grados extends Controller
{
    public function obtenerGRados(){
        try{
            $grados= DB::SELECT("select * from grado");

        return response()->json([
            'grados'=>$grados
        ],200);
        }catch(QueryException $e){
            return response()->json([
                'error'=>$e
            ],402);

        }
    }
}
