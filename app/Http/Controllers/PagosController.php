<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use DB;

class PagosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pagos= DB::select("CALL SP_MOS_PAGOS");

        return view('pagos.index',compact('pagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('pagos.create');
        
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
        $pagos= DB::select(
            "CALL SP_INS_PAGO(?,?,?,?,?)",
       
         array($request->Inte,$request->Sub,$request->Tot,$request->Tip_pago,$request->Descr)
         );  
         return redirect('/admin/pagos');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pagos = DB::select('CALL SP_SEL_PAGO (?)',array($id));
       return view('Pagos.edit',['pagos'=>$pagos]);
       //return dd($pagos);
    }
    //['pagos'=>$pagos]

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
        $pagos = DB::select("CALL SP_UPD_PAGOS (?,?,?,?,?,?)",
        array($request->Cod_pago,$request->Inte,$request->Sub,
              $request->Tot,$request->Tip_pago,$request->Descr));
              
        return redirect('admin/pagos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
    }
}
