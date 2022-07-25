<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = \App\Tagihan::findOrFail($id);
        $tglSekarang = \Carbon\Carbon::now();
        if($tglSekarang->gt($model->tanggal_jatuh_tempo)){
            $telatHari= $tglSekarang->diffInDays($model->tanggal_jatuh_tempo);
            $jumlahDenda =  $telatHari * 2000;
            $data['telatHari'] = $telatHari;
        }
        else{
            $jumlahDenda = 0;
        }
        $data['jumlahDenda'] = $jumlahDenda;
        $data['model'] = $model;
        $data['total'] = $model->jumlah+$data['jumlahDenda'];
        $data['tanggalSekarang']= $tglSekarang;
        return view('operator.invoice',$data);
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
        //
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
