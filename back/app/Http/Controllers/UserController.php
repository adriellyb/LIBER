<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserRequest;
use App\User;

class UserController extends Controller
{
    public function create(UserRequest $request){

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->cpf = $request->cpf;
        $user->birth = $request->birth;
        $user->phone = $request->phone;
        $user->image = $request->image;
        $user->save();
        return response()->json(['user' => $user],200); /** resposta ao cliente, objeto 'book' com os dados do obj, status 200 = sucesso */
    }

    /** Funcao que lista todos os usuarios */
    public function index(){
        $users = User::all();
        return response()->json(['user' => $users],200);
    }

    /** Funcao que busca o usuario pelo indice */
    public function show($id){
        $user = User::find($id);
        return response()->json(['user' => $user],200);
    }

    /** Funcao atualizar dados */
    public function update(Request $request, $id){
        $user = User::find($id);

        if ($request->name) {
            $user->name = $request->name;
        }
        
        if ($request->email) {
            $user->email = $request->email;
        }

        if ($request->password) {
            $user->password = $request->password;
        }

        if ($request->cpf) {
            $user->cpf = $request->cpf;
        }

        if ($request->birth) {
            $user->birth = $request->birth;
        }

        if ($request->phone) {
            $user->phone = $request->phone;
        }

        if ($request->image) {
            $user->image = $request->image;
        }

        $user->save();
        return response()->json(['user' => $user],200);
    }

    /** Funcao destroy (deleta o usuário) */
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return response()->json(['Usuario deletado com sucesso!'],200);
    }
    
    /** Estabelecendo conexão com a model de Address para conseguir os dados de endereço */
    public function createUser($user_id){
        $user = User::find($user_id);
        $address = new Address;
        $address->setAddress($user->id);

        return response()->json(['user' => $user ,200]);
    }
    
    public function getAddress($user_id){
        $user = User::find($user_id);
        $address = $user->address()->get();

        return response()->jason(['address' => $address],200);
    }
}
