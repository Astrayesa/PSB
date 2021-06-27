@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Petugas</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm">
                    <div class="input-group-append">
                        <a type="submit" class="btn btn-success" href="{{ route('user.create') }}">Tambah User</a>
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
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $i = 0; @endphp
                @foreach($users as $user)
                    <tr>
                        <th>{{ ++$i }}</th>
                        <th>{{$user->name}}</th>
                        <th>{{$user->email}}</th>
                        <td>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="input-group input-group-sm">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-danger">Hapus
                                        </button>
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
