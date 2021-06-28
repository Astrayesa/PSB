@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Calon Siswa</h3>
{{--            {{ dd(count($pendaftaran)) }}--}}
            @if(!count($pendaftaran) && !auth()->user()->is_admin)
                <div class="card-tools">
                    <div class="input-group input-group-sm">
                        <div class="input-group-append">
                            <a type="submit" class="btn btn-success" href="{{ route('siswa.create') }}">Daftar</a>
                        </div>
                    </div>
                </div>
            @elseif(count($pendaftaran) > 0 && !auth()->user()->is_admin)
                <div class="card-tools">
                    <div class="input-group input-group-append-sm">
                        <a class="btn btn-primary" href="{{ route('siswa.cetak') }}">Cetak</a>
                    </div>
                </div>
            @endif
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Asal Sekolah</th>
                    <th>Nilai Bahasa Inggris</th>
                    <th>Nilai Bahasa Indonesia</th>
                    <th>Nilai Matematika</th>
                    <th>Status</th>
                    @if(auth()->user()->is_admin == 1)
                        <th>Aksi</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @php $i = 0; @endphp
                @foreach($siswas as $siswa)
                    <tr>
                        <th>{{ ++$i }}</th>
                        <th>{{$siswa->nama}}</th>
                        <th>{{$siswa->asal_sekolah}}</th>
                        <th>{{ $siswa->nilai_bahasa_inggris }}</th>
                        <th>{{ $siswa->nilai_bahasa_indonesia }}</th>
                        <th>{{ $siswa->nilai_matematika }}</th>
                        <th>{{ $siswa->status == null ? "Menunggu" : $siswa->status}}</th>
                        @if(auth()->user()->is_admin == 1)
                            <td>
                                <div class="input-group input-group-sm">

                                    <div class="input-group-prepend">
                                        <a href="{{ route('siswa.show', $siswa->id) }}"
                                           class="btn btn-primary">Detail</a>
                                    </div>

                                    <form action="{{ route('siswa.terima', $siswa->id) }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-success">Terima</button>
                                            </div>
                                        </div>
                                    </form>
                                    <form action="{{ route('siswa.tolak', $siswa->id) }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-danger">Tolak</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </td>
                        @endif
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
