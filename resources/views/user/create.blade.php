@extends('layouts.app')

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah akun pengguna</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('user.store') }}" method="POST">
                            @csrf
                            <div class="card-body">

                                {{--input data petugas--}}
                                <div class="form-group">
                                    <label for="usernameInput">Nama</label>
                                    <input name="name" type="text" class="form-control" id="usernameInput"
                                           placeholder="Masukan Username" required>
                                </div>
                                <div class="form-group">
                                    <label for="emailInput">Email</label>
                                    <input name="email" type="email" class="form-control" id="emailInput" placeholder="Masukan Email"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="passwordInput">Password</label>
                                    <input name="password" type="password" class="form-control" id="passwordInput"
                                           minlength="4" placeholder="Masukan Password" required>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
