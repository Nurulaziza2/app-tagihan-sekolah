<?php

namespace App\Http\Controllers;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use \App\Pembayaran as Model;
use App\Tagihan;

class PembayaranController extends Controller
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
        
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'jumlah' => 'required',
            'tanggal' => 'required',
            'tagihan_id' => 'required',
        ]);
        
        $requestData['jumlah'] = str_replace(".", "", $requestData['jumlah']);    
        $requestData['dibayar_oleh'] = "Siswa";
        $requestData['diterima_oleh'] = Auth::user()->name;
        $tagihan = Tagihan::findOrFail($requestData['tagihan_id']);
        if ($tagihan->status == "Lunas") {
            flash('Tagihan sudah lunas')->warning();
            return back();
        }
        if($requestData['jumlah'] < $tagihan->jumlah){
            flash('Tagihan harus dibayar lunas')->warning();
            return back();
        }
        $tagihan->status= "Lunas";
        $tagihan->save();
        Model::create($requestData);
        flash("Tagihan Berhasil Dibayar")->success();
        return back();
        
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
