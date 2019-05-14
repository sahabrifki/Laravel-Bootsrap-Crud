<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function index(){

        $data_siswa =\App\Siswa::all();
        return view('siswa.index', ['data_siswa' => $data_siswa]);
    }
    
    public function create(Request $request){

        
        $this->validate($request,[
            'nama_depan' => 'required|min:3',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required|min:20'

        ]);
        \App\Siswa::create($request->all());
        return redirect('/siswa')->with('sukses', 'Data Berhasil Di Input');
        
    }

    public function edit($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('/siswa/edit',['siswa'=>$siswa]);

    }

    public function update(Request $request,$id){
        $siswa = \App\Siswa::find($id);
        $siswa->update($request->all());
        return redirect('/siswa')->with('sukses', 'Data berhasil diupdate');
    }

}

