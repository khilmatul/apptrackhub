<?php

namespace App\Http\Controllers;

use App\Models\Angkutan;
use Illuminate\Http\Request;
Use Alert;
use PDF;
use DB;

class AngkutanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $data = Angkutan::where('nama_angkutan','Like', '%' .$request->search .'%')->paginate(5);
        }
        else{
            $data = Angkutan::paginate(5);
        }
        return view('dashboard.angkutan.angkutan', compact ('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Angkutan;
        return view('dashboard.angkutan.create', compact ('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Angkutan;
        $model->no_polisi = $request->no_polisi;
        $model->nama_angkutan = $request->nama_angkutan;
        $model->sopir = $request->sopir;
        $model->trayek = $request->trayek;
        $model->save();

        $validatedData = $request->validate([
            'no_polisi' => 'required|max:10',
            'nama_angkutan' => 'required|min:3|max:7',
            'sopir' => 'required',
            'trayek' => 'required',
        ]);

        return redirect('angkutan')->withToastSuccess('Data Berhasil Di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Angkutan  $angkutan
     * @return \Illuminate\Http\Response
     */
    public function show(Angkutan $angkutan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Angkutan  $angkutan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Angkutan::find($id);
        return view('dashboard.angkutan.edit', compact ('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Angkutan  $angkutan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Angkutan $angkutan)
    {
        $model = Angkutan::find($id);
        $model->no_polisi = $request->no_polisi;
        $model->nama_angkutan = $request->nama_angkutan;
        $model->sopir = $request->sopir;
        $model->trayek = $request->trayek;
        $model->save();

        return redirect('angkutan')->withToastSuccess('Data Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Angkutan  $angkutan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Angkutan::find($id);
        $model->delete();
        // Alert::error();
        return redirect('angkutan')->withToastSuccess('Berhasil Menghapus Data');
    }

    public function eksportangkutan(){
        $data = Angkutan::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('dashboard.angkutan.pdf');
        return $pdf->download('angkutan.pdf');
    }
}
