<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    function login(LoginRequest $request){
        
        try{

            $user = User::where("email", $request->email)->first();
            if($user){

                if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
                    return response()->json(["success" => true, "msg" => "Usuario autenticado", "url" => url('/home')]);
                }

            }else{
                return response()->json(["success" => false, "msg" => "Usuario no encontrado"]);
            }

        }catch(\Exception $e){

            return response()->json(["success" => false, "err" => $e->getMessage(), "ln" => $e->getLine(), "msg" => "Hubo un problema"]);
        }
    }

    function logout(){

        Auth::logout();
        return redirect()->to('/');

    }
}
