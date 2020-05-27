<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Carbon\Carbon;
use App\DataKasus;
use Illuminate\Support\Facades\Cache;
use Redirect, Response;

class MeninggalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DataKasus::where('id_data', 5)->get();
        if ($request->ajax()) {
            return Datatables::of($data)
            ->addColumn('action', function($row){ 
              $btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'" data-original-title="Edit" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>'; 
              $btn = $btn.'  <a href="javascript:void(0)" data-toggle="tooltip" id="'.$row->id.'" data-original-title="Delete" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>'; 
              return $btn; 
         })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('data.meninggal');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;
        $data = DataKasus::updateOrCreate(['id' => $id],
                   ['nik' => $request->nik, 
                    'nama' => $request->nama,
                    'jenkel' => $request->jenkel,
                    'umur' => $request->umur,
                    'provinsi' => $request->provinsi,
                    'kota' => $request->kota,
                    'alamat' => $request->alamat,
                    'id_data' => $request->id_data
                    ]);        
        return Response::json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $data  = DataKasus::where($where)->first();
     
        return Response::json($data);
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

