<?php

namespace App\Http\Controllers;

use App\Models\Trayek;
use Illuminate\Http\Request;
Use Alert;
use PDF;
use DB;

class TrayekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $data = Trayek::where('nama_trayek','Like', '%' .$request->search .'%')->paginate(5);
        }
        else{
            $data = Trayek::paginate(5);
        }
        return view('dashboard.trayek.trayek', compact ('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Trayek;
        // $q = DB::table('trayeks')->select(DB::raw('MAX(RIGHT(kode,4)) as kode'));
        // $kd ="";
        // if($q->count()>0){
        //     foreach($q->get() as $k){
        //         $tmp = ((int)$k->kode)+1;
        //         $kd = sprintf("%04s", $tmp);
        //     }
        // }else{
        //     $kd = "0001";
        // }

        return view('dashboard.trayek.create', compact ('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Trayek;
        $model->nama_trayek = $request->nama_trayek;
        $model->lokasi_berangkat = $request->lokasi_berangkat;
        $model->lokasi_tiba = $request->lokasi_tiba;
        $model->via = $request->via;
        $model->save();

        $validatedData = $request->validate([
            'nama_trayek' => 'required|max:20',
            'lokasi_berangkat' => 'required',
            'lokasi_tiba' => 'required',
            'via' => 'required',
        ]);

        return redirect('trayek')->withToastSuccess('Data Berhasil Di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trayek  $trayek
     * @return \Illuminate\Http\Response
     */
    public function show(Trayek $trayek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trayek  $trayek
     * @return \Illuminate\Http\Response
     */
    public function edit(Trayek $trayek)
    {
        $model = Trayek::find($id);
        return view('dashboard.trayek.edit', compact ('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trayek  $trayek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trayek $trayek)
    {
        $model = Trayek::find($id);
        $model->nama_trayek = $request->nama_trayek;
        $model->lokasi_berangkat = $request->lokasi_berangkat;
        $model->lokasi_tiba = $request->lokasi_tiba;
        $model->via = $request->via;
        $model->save();

        return redirect('trayek')->withToastSuccess('Data Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trayek  $trayek
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Trayek::find($id);
        $model->delete();
        // Alert::error();
        return redirect('trayek')->withToastSuccess('Berhasil Menghapus Data');
    }

    public function eksporttrayek(){
        $data = Trayek::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('dashboard.trayek.pdf');
        return $pdf->download('trayek.pdf');
    }
}
