@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Input Data
                </div>
                <div class="card-body">

                    <form action="{{ route('pegawai.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="id_pegawai">Id Pegawai</label>
                            <input type="text" name="id_pegawai" value="{{old('id_pegawai')}}"
                                class="form-control {{$errors->first('id_pegawai') ? "is-invalid" : ""}}"
                                id="id_pegawai" placeholder="Id Pegawai">
                            <div class="invalid-feedback">
                                {{$errors->first('id_pegawai')}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="{{old('nama')}}"
                                class="form-control {{$errors->first('nama') ? "is-invalid" : ""}}" id="nama"
                                placeholder="Nama">
                            <div class="invalid-feedback">
                                {{$errors->first('nama')}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control {{$errors->first('jenis_kelamin') ? "is-invalid" : ""}}"
                                name="jenis_kelamin" id="jenis_kelamin">
                                <option disabled>--Pilih--</option>
                                <option value="Pria" @if (old('jenis_kelamin')=='Pria' ) selected="selected" @endif>Pria
                                </option>
                                <option value="Wanita" @if (old('jenis_kelamin')=='Wanita' ) selected="selected" @endif>
                                    Wanita</option>
                            </select>
                            <div class="invalid-feedback">
                                {{$errors->first('jenis_kelamin')}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input type="number" name="no_hp" value="{{old('no_hp')}}"
                                class="form-control {{$errors->first('no_hp') ? "is-invalid" : ""}}" id="no_hp"
                                placeholder="No HP">
                            <div class="invalid-feedback">
                                {{$errors->first('no_hp')}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" value="{{old('alamat')}}"
                                class="form-control {{$errors->first('alamat') ? "is-invalid" : ""}}" id="alamat"
                                placeholder="Alamat">
                            <div class="invalid-feedback">
                                {{$errors->first('alamat')}}
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
