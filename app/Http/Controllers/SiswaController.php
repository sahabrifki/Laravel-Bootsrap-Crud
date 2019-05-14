<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;


class SiswaController extends Controller
{
    //
    public function index(){

        $data_siswa =\App\Siswa::all();
        return view('siswa.index', ['data_siswa' => $data_siswa]);
    }
    
    public function create (Request $request){
        
        
        $validator = Validator::make($request->all(),
        [
            'nama_depan' => 'required|min:4',
            'nama_belakang' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required|min:10|max:30',
        ]
    );
            if($validator->fails()){
                return redirect()->back()->withInput()->withErrors($validator->errors());
            }
            else {
                \App\Siswa::create($request->all());
                return redirect('/siswa')->with('sukses','Data Berhasil di input');
            };       
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

