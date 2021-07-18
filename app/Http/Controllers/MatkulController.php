<?php

namespace App\Http\Controllers;

use App\Matkul;
use Illuminate\Http\Request;
Use Alert;
use mysqli;

class MatkulController extends Controller
{
    public function index()
    {
        $matkul = Matkul::all(); //select * from nama_table
        return view('matkul.index' , compact('matkul'));
    }

    public function create()
    {
         return view('matkul.create');
    }

    public function store(Request $request)
    {
        Matkul::create($request->all());
        alert('Sukses','Data Berhasil Disimpan', 'success');
        return redirect()->route('matkul');
    }

    public function edit($id)
    {
        $matkul = matkul::find($id); //select * from nam_table where id =$id;
        return view('matkul.edit', compact('matkul'));
    }

    public function update(Request $request, $id)
    {
        $matkul = Matkul::find($id);
        $matkul->update($request->all());
        toast('Yeayy Berhasil Mengedit Data', 'success');
        return redirect()->route('matkul');
    }

    public function destroy($id)
    {
        $matkul = Matkul::find($id);
        $matkul->delete();
        toast('Yeayy Berhasil Menghapus Data', 'success');
        return redirect()->route('matkul');
    }
}   
