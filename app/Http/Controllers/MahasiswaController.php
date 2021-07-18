<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use App\User;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with(['user'])->get(); //select * from nama_table
        return view('mahasiswa.index' , compact('mahasiswa'));
    }

    public function create()
    {
        $user = User::all(); //select * from nam_table where id =$id;
        return view('mahasiswa.create' , compact('user'));
    }

    public function store(Request $request)
    {
        Mahasiswa::create($request->all());
        alert('Sukses','Data Berhasil Disimpan', 'success');
        return redirect()->route('mahasiswa');
    }

    public function edit($id)
    {
        $user = User::all();
        $mahasiswa = Mahasiswa::find($id); 
        return view('mahasiswa.edit', compact('mahasiswa', 'user'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        toast('Yeayy Berhasil Mengedit Data', 'success');
        return redirect()->route('mahasiswa');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        toast('Yeayy Berhasil Menghapus Data', 'success');
        return redirect()->route('mahasiswa');
    }
}
