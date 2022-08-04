<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use DB;
use phpDocumentor\Reflection\Types\Mixed_;
use Illuminate\Support\Facades\Http;


class CreditoController extends Controller
{
    //
    public function index()
    {
        //
        
        $response  = Http::get('http://localhost:3000/creditos'); 
        return view('creditos.index')->with('resultado', json_decode($response,true));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // 
        return view('creditos.create');
       
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

        $response  = Http::post('http://localhost:3000/creditos',[
            'Tip_credito'=> $request->Tip_credito,
            'Dia_credito'=> $request->Dia_credito,
            'Descr'=> $request->Descr
        ]); 
        return redirect('/admin/creditos');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblCreditos  $tblCreditos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblCreditos  $tblCreditos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
      
        $respuesta  = Http::get('http://localhost:3000/creditos/'.$id);
        
        return view('creditos.edit')->with('respuesta', json_decode($respuesta,true));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       
        $respuesta  = Http::put('http://localhost:3000/creditos/'.$id,[
            'Tip_credito'=> $request->Tip_credito,
            'Dia_credito'=> $request->Dia_credito,
            'Descr'=> $request->Descr
        ]);
        return redirect('/admin/creditos');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $respuesta = Http::delete('http://localhost:3000/creditos/'.$id);
        
        return redirect('/admin/creditos');
        
    }

}
