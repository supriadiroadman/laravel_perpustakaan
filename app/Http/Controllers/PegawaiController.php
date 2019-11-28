<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;
use Validator;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Pegawai::all();
        return view('pegawai.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'id_pegawai' => 'required',
        //     'nama' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'no_hp' => 'required',
        //     'alamat' => 'required',
        // ])->validate();
        $request->validate([
            'id_pegawai'    => 'required|max:20',
            'nama'          => 'required',
            'jenis_kelamin' => 'required',
            'no_hp'         => 'required',
            'alamat'        => 'required',
        ]);

        // $data = new Pegawai();
        // $data->create($request->all());
        Pegawai::create($request->all());
        return redirect()->route('pegawai.index')->with('status', 'Data berhasil ditambah');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pegawai'    => 'required|max:20',
            'nama'          => 'required',
            'jenis_kelamin' => 'required',
            'no_hp'         => 'required',
            'alamat'        => 'required',
        ]);

        // var_dump($_POST);
        $data = Pegawai::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('pegawai.index')->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pegawai::findOrFail($id);
        $data->delete();
        return redirect()->route('pegawai.index')->with('status', 'Data berhasil dihapus');
    }
}
