@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">EDIT MATA KULIAH</div>

                <div class="card-body">
                    <form action="{{ route('update.matkul', $matkul->id )}}" method="post">
                    @csrf
                    
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Kode Matkul</label>
                                    <input type="text" name="kd_matkul" class="form-control" placeholder="Tambahkan Kode Matkul" value="{{ is_null
                                    ($matkul) ? '' : $matkul->kd_matkul }}">
                                </div>
                                <div class="col">
                                    <label for="">Nama Mata Kuliah</label>
                                    <input type="text" name="nama_matkul" class="form-control" placeholder="Tambahkan Nama Matkul" value="{{ is_null
                                    ($matkul) ? '' : $matkul->nama_matkul }}">
                                </div>
                                <div class="col">
                                    <label for="">SKS</label>
                                    <input type="number" name="sks" class="form-control" placeholder="Tambahkan SKS" value="{{ is_null
                                    ($matkul) ? '' : $matkul->sks }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{ route ('matkul')}}" class="btn btn-md btn-danger">BATAL</a>
                            </div>
                        </div>
                    </form>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
