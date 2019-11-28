@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row justify-content-center">
        <div class="col-md-8">
            <table class="table table-striped">
                <tr>
                    <th>Id Pegawai</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                </tr>

                @foreach ($datas as $data)
                <tr>
                    <td>{{$data->id_pegawai}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->jenis_kelamin}}</td>
                    <td>{{$data->no_hp}}</td>
                    <td>{{$data->alamat}}</td>
                </tr>
                @endforeach

            </table>
        </div>
    </div>
</div>
@endsection
