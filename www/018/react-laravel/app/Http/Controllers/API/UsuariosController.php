<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario; 


class UsuariosController extends Controller
{
    //

    public function create(Request $request){

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
    
    public function list(){

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

    public function delete($id){

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

    public function edit($id){

      try {

        $data = Usuario::find($id);

        if ($data) {
          $response['data'] = $data;
          $response['message'] = "Usuario cargado correctamente";
          $response['success'] = true;
        }
        else {
          $response['message'] = "No se ha encontrado un usuario con el id => $id";
          $response['success'] = false;
        }

      } catch (\Exception $e) {
        $response['message'] = $e->getMessage();
        $response['success'] = false;
      }
      return $response;
    }

    public function update(Request $request,$id){

      try {

        $data['nombre'] = $request['nombre'];
        $data['apellidos'] = $request['apellidos'];
        $data['direccion'] = $request['direccion'];
        $data['correo'] = $request['correo'];
        $data['telefono'] = $request['telefono'];

        Usuario::where("id",$id)->update($data);

        $response['message'] = "Usuario actualizado correctamente";
        $response['success'] = true;

      } catch (\Exception $e) {
        $response['message'] = $e->getMessage();
        $response['success'] = false;
      }
      return $response;

    }
}