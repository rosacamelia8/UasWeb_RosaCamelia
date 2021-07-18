<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Matkul;
use App\Nilai;
use App\User;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with(['mahasiswa'])->get(); //select * from nama_table
        return view('nilai.index' , compact('nilai'));
    }

    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        $matkul = Matkul::all();
        return view('nilai.create' , compact('matkul', 'mahasiswa'));
    }

    public function store(Request $request)
    {
        Nilai::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan', 'success');
        return redirect()->route('nilai');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::all();
        $matkul = Matkul::all();
        $nilai = Nilai::find($id); 
        return view('nilai.edit', compact('mahasiswa', 'nilai', 'matkul'));
    }

    public function update(Request $request, $id)
    {
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Yeayy Berhasil Mengedit Data', 'success');
        return redirect()->route('nilai');
    }

    public function destroy($id)
    {
        $nilai = Nilai::find($id);
        $nilai->delete();
        toast('Yeayy Berhasil Menghapus Data', 'success');
        return redirect()->route('nilai');
    }
}