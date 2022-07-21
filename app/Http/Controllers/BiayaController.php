<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Biaya as Model;
use Auth;

class BiayaController extends Controller
{
    private $viewPrefix = "admin.biaya"; 
    private $routePrefix = "biaya";  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Model::latest()->paginate(10);
        $data['models'] = $models;
        $data['routePrefix'] = $this->routePrefix;
        return view($this->viewPrefix . '_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Model();
        $data['model'] = $model;
        $data['method'] = 'POST';
        $data['kelasList'] =\App\Kelas::pluck('nama', 'id');
        $data['route'] = $this->routePrefix .'.store';
        $data['namaTombol']= 'Simpan';
        return view($this->viewPrefix . '_form', $data);

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
            'nama' => 'required',
            'nominal' => 'required',
            'tahun' => 'required',
            'kelas_id'=> 'required',
            'deskripsi' => 'nullable',
        ]);
        $requestData['nominal'] = str_replace(".", "", $requestData['nominal']);
    
        $requestData['user_id'] = Auth::user()->id;
        Model::create($requestData);
        flash("Data berhasil disimpan");
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
        $data['model'] = Model::findOrFail($id);
        return view($this->viewPrefix . '_show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Model::findOrFail($id);
        $data['model'] = $model;
        $data['method'] = 'PUT';
        $data['kelasList'] =\App\Kelas::pluck('nama', 'id');
        $data['route'] = [$this->routePrefix . '.update', $id];
        $data['namaTombol']= 'Update';
        return view($this->viewPrefix . '_form', $data);
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
        
        $requestData = $request->validate([
            'nama' => 'required',
            'nominal' => 'required',
            'deskripsi' => 'nullable',
            'kelas_id'=> 'required',
        ]);
        $requestData['nominal'] = str_replace(".", "", $requestData['nominal']);
        $requestData['user_id'] = Auth::user()->id;
        
        Model::where('id', $id)->update($requestData);
        flash("Data berhasil diupdate");
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model =  Model::findOrFail($id);
        $model->delete();
        flash("Data berhasil dihapus")->success();
        return back();
    }
}
