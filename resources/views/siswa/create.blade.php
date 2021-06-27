@extends('layouts.app')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Calon siswa</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('siswa.store') }}" method="POST">
            @csrf
            <div class="card-body">

                {{--input data petugas--}}
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input name="nama" type="text" class="form-control" id="nama"
                           placeholder="Masukan Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <input name="asal_sekolah" type="text" class="form-control" id="asal_sekolah"
                           placeholder="Masukan Asal Sekolah"
                           required>
                </div>
                <div class="form-group">
                    <label for="nilai">Nilai Ujian</label>
                    <input name="nilai" type="number" class="form-control" id="nilai"
                           minlength="4" placeholder="Masukan Nilai Ujian" required>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
