<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Usuario;
use App\Rol;
use Illuminate\Support\Facades\Hash;
use Validator;
use DB;

class UserController extends Controller
{
    function index(){
        $users = User::all();
        $usuarios = Usuario::all();
        $roles = Rol::all();
        return view('users.index', compact('users','usuarios','roles'));
    }

    function store($data){ 

        $dato = json_decode($data, true); 

           $user = [];  
           $user['name'] = $dato["Nombre"];
           $user['email'] = $dato["Email"]; 
           $user['rol_id'] = $dato["Rol_Id"]; 
           $user['estado'] = $dato["Estado"]; 
           $user['usuario_id'] = $dato["Usuario_Id"]; 
           $user['password'] = Hash::make($dato["Cedula"]); 
   
           return User::create($user);
    }

    public function activar_users($id)
    {

        $usuario = User::find($id); 
        $usuario->estado = '1';
        $usuario->save();
        return ($usuario);

    }
    public function inactivar_users($id)
    {

        $usuario = User::find($id); 
        $usuario->estado = '0';
        $usuario->save();
        return ($usuario);

    }
    
    protected function restablecer($id)
    {

        $usuario = User::find($id); 
        $usuario->password = Hash::make('123456789');
        $usuario->save();
        return ($usuario); 
    }
    protected function password($data)
    {

        $dato = json_decode($data, true);
        // var_dump($dato);
        $usuario = User::find($dato['Id']); 
        $usuario->password = Hash::make($dato['Password']);
        $usuario->save();
        return ($usuario); 
    }

    public function editar($id)
    {
        $usuario = User::find($id);
        return ($usuario);
    }

    public function verificar($id)
    {
        // $ok = User::find($id);
        $usuario = DB::table('usuarios')->where('identificacion', $id)->first();
        if ($usuario) {
            $user = User::find($usuario->id);
                    if ($user) {
                        $ok = 1;
                        return ($ok);
                    } else {
                        return ($usuario->email);
                        
                    }
         
        } else {
            $ok = 2;
            return ($ok);
          
        }
        
        
    //    dd($ok);
        
        

    }

    public function update($data)
    {
        $dato = json_decode($data, true);
        $user = User::find($dato['Id']); 
        $usuario['id'] = $dato["Id"];
        $usuario['name'] = $dato["Username"];  
        $usuario['email'] = $dato["Correo"]; 
        $ok = $this->validatorupdate($usuario);
        if($ok->fails()){
            return(0);
        }else{

            $user->update($usuario);
            return(1);
        }

    }

            public function validatorupdate(array $data){
                return Validator::make($data, [
                'name' => 'required|max:255', 
                'email' => 'required|email|max:255|unique:users,email,'.$data['id'],
            ]);
        }

        protected function update_rol($data)
        {
    
            $dato = json_decode($data, true);
            $rol_id = $dato['Rol'];

            $ok = DB::table('users')
            ->where('id', $dato['Id'])
            ->update(['rol_id' => $rol_id]);
            
           
            // $usuario = User::find($dato['Id']); 
            
            // dd($ok);
            // // var_dump($usuario);
            // $usuario->rol_id = $dato(['Rol']);
            // $usuario->save();
            return ($ok); 
        }
    
            
  
}
