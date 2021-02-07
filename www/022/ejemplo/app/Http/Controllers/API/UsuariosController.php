<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Usuario;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        try {
  
          $data = Usuario::all();
          $response['data'] = $data;
          $response['success'] = true;
  
        } catch (\Exception $e) {
          $response['message'] = $e->getMessage();
          $response['success'] = false;
        }
        return $response;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        try {

          $insert['nombre'] = $request['nombre'];
          $insert['apellidos'] = $request['apellidos'];
          $insert['direccion'] = $request['direccion'];
          $insert['correo'] = $request['correo'];
          $insert['telefono'] = $request['telefono'];
  
          Usuario::insert($insert);
  
          $response['message'] = "Se ha añadido un nuevo Usuario";
          $response['success'] = true;
  
        } catch (\Exception $e) {
            
          $response['message'] = $e->getMessage();
          $response['success'] = true;
        }
         
        return $response;
      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

      try {
        $res = Usuario::where("id",$id)->delete();
        $response['res'] = $res;
        $response['message'] = "Usuario borrado correctamente";
        $response['success'] = true; 
      } catch (\Exception $e) {
        $response['message'] = $e->getMessage();
        $response['success'] = false;
      }

      return $response;
    }

}
