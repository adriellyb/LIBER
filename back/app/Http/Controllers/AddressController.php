<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class AddressController extends Controller
{
    public function create(Request $request){
        $address = new Address;
        $address->address = $request->address;
        $address->number = $request->number;
        $address->complement = $request->complement;
        $address->district = $request->district;
        $address->city = $request->city;
        $address->save();
        return response()->json(['address' => $address],200);
    }

    /** Funcao que lista todos os enderecos */
    public function index(){
        $addresses = Address::all();
        return response()->json(['address' => $addresses],200);
    }

    /** Funcao que busca o usuario pelo indice */
    public function show($id){
        $address = Address::find($id);
        return response()->json(['address' => $address],200);
    }

    /** Funcao atualizar dados */
    public function update(Request $request, $id){
        $address = Address::find($id);

        if ($request->address) {
            $address->address = $request->address;
        }

        if ($request->number) {
            $address->number = $request->number;
        }

        if ($request->complement) {
            $address->complement = $request->complement;
        }

        if ($request->district) {
            $address->district = $request->district;
        }

        if ($request->city) {
            $address->city = $request->city;
        }

        $address->save();
        return response()->json(['address' => $address],200);
    }

    /** Funcao destroy (deleta o endereço) */
    public function destroy($id){
        $address = Address::find($id);
        $address->delete();
        return response()->json(['Endereço deletado com sucesso!'],200);
    }
       
}
