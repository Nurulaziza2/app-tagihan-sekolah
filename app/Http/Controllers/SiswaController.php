<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Siswa as Model;
use \App\Kelas;
use Auth;

class SiswaController extends Controller
{
    private $viewPrefix = "operator.siswa"; 
    private $routePrefix = "siswa";  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->filled('q')) {
            $models = Model::search(request('q'))->paginate(100);
        } else {
            $models = Model::orderBy('id', 'desc')->paginate(100);
        }
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
        // $data['kelas']= Kelas::pluck('nama','id');
        // $data['durasi']= Kelas::pluck('durasi_kursus','id');
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
            'nis' => 'required|unique:siswa',
            'email'=> 'required|email|unique:siswa',
            'jk' => 'required',
            // 'kelas_id' => 'nullable',
            'tgl_masuk' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2000',
        ]);
        if ($request->hasFile('gambar')) {
            $requestData['gambar'] = $request->file('gambar')->store('public/images');
        }
        // $requestData['kelas_id'] = Auth::kelas()->id;
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
        $data['route'] = [$this->routePrefix . '.update', $id];
        // $data['kelas']= Kelas::pluck('nama','id');
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
            'nis' => 'required|unique:siswa,nis,' . $id,
            'email'=> 'required|email|unique:siswa',
            'jk' => 'required',
            // 'kelas_id'=> 'nullable',
            'tgl_masuk' => 'required',
        ]);
        if ($request->hasFile('gambar')){
            $requestData['gambar'] = $request->file('gambar')->store('public/images');
            $model = Model::findOrFail($id);

            if($model->gambar != null) {
                \Storage::delete($model->gambar);
            }
        }

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
