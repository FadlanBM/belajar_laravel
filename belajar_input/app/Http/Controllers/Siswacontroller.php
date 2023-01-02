<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Siswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $data=siswa::orderBy('absen','asc')->get();
        return view('halaman/index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('halaman/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    Session::flash('nis',$request->nis);
    Session::flash('absen',$request->absen);
    Session::flash('nama',$request->nama);
    Session::flash('kelas',$request->kelas);
    Session::flash('keahlian',$request->keahlian);
        $request->validate([
            'nis'=>'required|numeric',
            'absen'=>'required|numeric',
            'nama'=>'required',
            'kelas'=>'required',
            'keahlian'=>'required',
        ],[
            'nis.required'=>'Kolom Nis Wajib di isi terlebih dahulu',
            'absen.required'=>'Kolom No Absen Wajib di isi terlebih dahulu',
            'nama.required'=>'Kolom Nama Wajib di isi terlebih dahulu',
            'kelas.required'=>'Kolom Kelas Wajib di isi terlebih dahulu',
            'keahlian.required'=>'Kolom Keahlian Wajib di isi terlebih dahulu',
        ]);
        $data=[
            'nis'=>$request->input('nis'),
            'absen'=>$request->input('absen'),
            'nama'=>$request->input('nama'),
            'kelas'=>$request->input('kelas'),
            'keahlian'=>$request->input('keahlian'),
        ];
        siswa::create($data);
        return redirect('siswa')->with('success','Berhasil Memasukkan Data');
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
        $data=siswa::where('absen',$id)->first();
        return view('halaman/detail')->with('data',$data);
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
