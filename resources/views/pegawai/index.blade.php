@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10">

            @if(session('status'))
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <strong> {{session('status')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <a href="{{ route('pegawai.create') }}" class="btn btn-primary mb-2">Tambah</a>
            <div class="card">
                <div class="card-header">
                    Data Pegawai
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Id Pegawai</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>No HP</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>

                        @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->id_pegawai}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->jenis_kelamin}}</td>
                            <td>{{$data->no_hp}}</td>
                            <td>{{$data->alamat}}</td>
                            <td>
                                <a href="{{ route('pegawai.edit', ['id'=>$data->id]) }}"
                                    class="btn btn-info btn-sm">Edit</a>

                                <form action="{{ route('pegawai.destroy', ['id'=>$data->id]) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah anda yakin')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
