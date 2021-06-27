@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Calon Siswa</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm">
                    <div class="input-group-append">
                        <a type="submit" class="btn btn-success" href="{{ route('siswa.create') }}">Tambah Calon
                            Siswa</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Asal Sekolah</th>
                    <th>Nilai</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $i = 0; @endphp
                @foreach($siswas as $siswa)
                    <tr>
                        <th>{{ ++$i }}</th>
                        <th>{{$siswa->nama}}</th>
                        <th>{{$siswa->asal_sekolah}}</th>
                        <th>{{ $siswa->nilai }}</th>
                        <td>
                            <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="input-group input-group-sm">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-danger">Tolak</button>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
