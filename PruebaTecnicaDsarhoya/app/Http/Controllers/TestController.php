<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //https://api.sbif.cl/api-sbifv3/recursos_api/dolar/2023/4?apikey=d8093171162117c0c6e8da895b00978d4e2b6a0e&formato=JSON
        
        $APIanual = Http::get('https://api.sbif.cl/api-sbifv3/recursos_api/dolar/2022?apikey=d8093171162117c0c6e8da895b00978d4e2b6a0e&formato=JSON');

        $APImensual = Http::get('https://api.sbif.cl/api-sbifv3/recursos_api/dolar/2022/4?apikey=d8093171162117c0c6e8da895b00978d4e2b6a0e&formato=JSON');
        $decodeado = $APIanual->json();
        $decodeado = $decodeado['Dolares'];

        $decodeadoMensual = $APImensual->json();
        $decodeadoMensual = $decodeadoMensual['Dolares'];
        //dd($decodeadoMensual);

        return view('TestFolder.test',compact('decodeado','decodeadoMensual'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('TestFolder.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos=[
            'nombre'=>'required|string'      
        ];
        $mensaje=[
            "nombre.required"=>'El nombre es requerido',
            "nombre.string"=>'El nombre debe poseer caracteres'
            ];
        $this->validate($request,$campos,$mensaje);     
        
       
        $datos=$request->except('_token');
        Test::insert($datos);
        return redirect('test/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }

    public function valorDolarMes($mes){
        //dd($mes);
        $APImensual = Http::get('https://api.sbif.cl/api-sbifv3/recursos_api/dolar/2022/'.$mes.'?apikey=d8093171162117c0c6e8da895b00978d4e2b6a0e&formato=JSON');
        $decodeadoMensual = $APImensual->json();
        $decodeadoMensual = $decodeadoMensual['Dolares'];

        return view('TestFolder.valormes',compact('decodeadoMensual','mes'));
    }
}
