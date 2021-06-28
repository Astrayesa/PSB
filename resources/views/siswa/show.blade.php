@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card text-center">
                    <div class="card-header">
                        <div class="card-title"><h1>Detail Siswa</h1></div>
                    </div>
                    <div class="card-body">
                        <img src="{{ URL::to('/photos').'/'.$siswa->photo }}" width="240px" class="m-auto">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>{{ $siswa->nama }}</td>
                            </tr>
                            <tr>
                                <td>Nilai Bahas Inggris</td>
                                <td>{{ $siswa->nilai_bahasa_inggris }}</td>
                            </tr>
                            <tr>
                                <td>Nilai Bahasa Indonesia</td>
                                <td>{{ $siswa->nilai_bahasa_indonesia }}</td>
                            </tr>
                            <tr>
                                <td>Nilai Matematika</td>
                                <td>{{ $siswa->nilai_matematika }}</td>
                            </tr>
                            <tr>
                                <td>Asal Sekolah</td>
                                <td>{{ $siswa->asal_sekolah }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>{{ $siswa->nama }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
