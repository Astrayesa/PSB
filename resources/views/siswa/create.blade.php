@extends('layouts.app')

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Calon siswa</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label for="photo">Foto</label>
                    <input name="photo" type="file" class="form-control"
                           id="photo" placeholder="Upload Foto" accept="image/*" required>
                </div>
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
                    <label for="nilai">Nilai Ujian Bahasa Inggris</label>
                    <input name="nilai_bahasa_inggris" type="number" class="form-control" id="nilai"
                           minlength="4" placeholder="Masukan Nilai Ujian" required>
                </div>

                <div class="form-group">
                    <label for="nilai">Nilai Ujian Bahasa Indonesia</label>
                    <input name="nilai_bahasa_indonesia" type="number" class="form-control" id="nilai"
                           minlength="4" placeholder="Masukan Nilai Ujian" required>
                </div>

                <div class="form-group">
                    <label for="nilai">Nilai Ujian Matematika</label>
                    <input name="nilai_matematika" type="number" class="form-control" id="nilai"
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
