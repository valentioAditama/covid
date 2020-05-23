<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Carbon\Carbon;
use App\DataKasus;
use Illuminate\Support\Facades\Cache;

class MeninggalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('data.meninggal');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function json(Request $request)
    {
        $data = DataKasus::where('id_data', 5)->get();
            return Datatables::of($data)
            ->addColumn('action', function($data){
            return '<a href="edit/'.$data->id.'" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href="delete/'.$data->id.'" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>';

         })
            ->make(true);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new DataKasus;

        $data->nik = $request->input('nik');
        $data->nama = $request->input('nama');
        $data->jenkel = $request->input('jenkel');
        $data->umur = $request->input('umur');
        $data->provinsi = $request->input('provinsi');
        $data->kota = $request->input('kota');
        $data->alamat = $request->input('alamat');
        $data->id_data = $request->input('id_data');

        $data->save();

        //return redirect('/odp')->with('success', 'Data Berhasil Ditambahkan');
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
        //
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
        $data = DataKasus::find($id);

        $data->nik = $request->input('nik');
        $data->nama = $request->input('nama');
        $data->jenkel = $request->input('jenkel');
        $data->umur = $request->input('umur');
        $data->provinsi = $request->input('provinsi');
        $data->kota = $request->input('kota');
        $data->alamat = $request->input('alamat');
        $data->id_data = $request->input('id_data');

        $data->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DataKasus::find($id);
        $data->delete();
    }
}

