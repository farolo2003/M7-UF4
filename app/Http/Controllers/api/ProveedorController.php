<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proveedor;


class ProveedorController extends Controller
{
    function index(){
        $product = Proveedor::all();
        if($product){
            return response()->json(['data' => $product], 200,[],JSON_UNESCAPED_UNICODE);
        }else {
            return response()->json(['data' => 'No hay productos'], 404,[],JSON_UNESCAPED_UNICODE);
        }
    }

    function show($id){
        $product=Proveedor::find($id);
        if($product){
            return response()->json(['data' => $product], 200,[],JSON_UNESCAPED_UNICODE);
        }else {
            return response()->json(['data' => 'No hay productos'], 404,[],JSON_UNESCAPED_UNICODE);
        }
    }

    function store(Request $request){
        $product = Proveedor::create($request->all());
        if($product){
            return response()->json(['data' => $product], 200,[],JSON_UNESCAPED_UNICODE);
        }else {
            return response()->json(['data' => 'No hay productos'], 404,[],JSON_UNESCAPED_UNICODE);
        }
    }

    function update(Request $request, $id){
        $product = Proveedor::find($id);
        if($product){
            $product->update($request->all());
            return response()->json(['data' => $product], 200,[],JSON_UNESCAPED_UNICODE);
        }else {
            return response()->json(['data' => 'No hay productos'], 404,[],JSON_UNESCAPED_UNICODE);
        }
    }

    function destroy($id) {
        $product = Proveedor::find($id);
        $product->delete();
        return response()->json(['data' => $product], 200,[],JSON_UNESCAPED_UNICODE);
    }
}
