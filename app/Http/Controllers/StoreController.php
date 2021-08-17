<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Core\Store;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resposta = Store::all();

        return response()->json(['data' => $resposta]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'cnpj' => 'required'
        ]);

        if($validation->fails()){
            return response()->json($validation->errors(), 222);
        }

        $resposta = $request->all();

        Store::create($resposta);

        return response()->json(['data' =>$resposta]);
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
        $respostaRequest = $request->all();
        //findOrfail = SELECT * FROM store WHERW id = 3;
        $resposta = Store::findOrFail($id);
        $resposta->update($respostaRequest);

        return response()->json([
            'msg' => 'Dados atualizados com sucesso',
            'data' => $resposta]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resposta = Store::find($id);
        $resposta->delete($resposta);

        return response()->json([
            'msg' => 'Deletado com sucesso', 
            'data' => $resposta]);
    }
}
