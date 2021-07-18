@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    DATA NILAI
                    <a href="{{ route('tambah.nilai') }}" class="btn btn-md btn-success float-right">+ Tambah Nilai</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO.</th>
                                <th>NPM</th>
                                <th>NAMA LENGKAP</th>
                                <th>NAMA MATKUL</th>
                                <th>SKS</th>
                                <th>NILAI</th>
                                <th>AKSI</th>
                            </tr>
                            @php 
                                $no = 1;
                            @endphp
                            @foreach ($nilai as $n)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $n->mahasiswa->npm }}</td>
                                <th>{{ $n->mahasiswa->user->name }}</th>
                                <th>{{ $n->matkul->nama_matkul }}</th>
                                <td>{{ $n->matkul->sks }}</td>
                                <td>{{ $n-> nilai }}</td>
                                <td>
                                    <a href="{{ route('nilai.edit', $n->id )}}" class="btn btn-sm btn-warning">EDIT</a>
                                    <a href="{{ route('nilai.hapus', $n->id )}}" class="btn btn-sm btn-danger">HAPUS</a>
                                </td>
                            </tr>
                        @endforeach
                        </table>
                    </div>   

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
