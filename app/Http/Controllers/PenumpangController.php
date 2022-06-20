<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penumpang;
Use Alert;
use PDF;
use DB;


class PenumpangController extends Controller
{
    
    public function index(Request $request)
    {
        if($request->has('search')){
            $data = Penumpang::where('nama_lengkap','Like', '%' .$request->search .'%')->paginate(5);
        }
        else{
            $data = Penumpang::paginate(5);
        }
        return view('dashboard.penumpang.penumpang', compact ('data'));
    }

    
    public function create()
    {
        $model = new Penumpang;
        $q = DB::table('penumpangs')->select(DB::raw('MAX(RIGHT(kode,4)) as kode'));
        $kd ="";
        if($q->count()>0){
            foreach($q->get() as $k){
                $tmp = ((int)$k->kode)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }

        return view('dashboard.penumpang.create', compact ('model', 'kd'));
    }

   
    public function store(Request $request)
    {
        $model = new Penumpang;
        $model->kode = $request->kode;
        $model->nama_lengkap = $request->nama_lengkap;
        $model->tanggal_lahir = $request->tanggal_lahir;
        $model->alamat = $request->alamat;
        $model->no_telepon = $request->no_telepon;
        $model->asal_sekolah = $request->asal_sekolah;
        $model->qr_code = $request->qr_code;
        $model->save();

        $validatedData = $request->validate([
            'kode' => 'required|min:3',
            'nama_lengkap' => 'required|max:100',
            'tanggal_lahir' => 'required|date|before:tomorrow',
            'alamat' => 'required',
            'no_telepon' => 'required|min:11|max:12',
            'asal_sekolah' => 'required|',
            'qr_code' => 'required|min:8|max:50'
        ]);

        return redirect('penumpang')->withToastSuccess('Data Berhasil Di Simpan');;

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

    
    public function edit($id)
    {
        $model = Penumpang::find($id);
        return view('dashboard.penumpang.edit', compact ('model'));
    }

    
    public function update(Request $request, $id)
    {
        $model = Penumpang::find($id);
        $model->kode = $request->kode;
        $model->nama_lengkap = $request->nama_lengkap;
        $model->tanggal_lahir = $request->tanggal_lahir;
        $model->alamat = $request->alamat;
        $model->no_telepon = $request->no_telepon;
        $model->asal_sekolah = $request->asal_sekolah;
        $model->qr_code = $request->qr_code;
        $model->save();

        return redirect('penumpang')->withToastSuccess('Data Berhasil Di Ubah');
    }

    
    public function destroy($id)
    {
        $model = Penumpang::find($id);
        $model->delete();
        // Alert::error();
        return redirect('penumpang')->withToastSuccess('Berhasil Menghapus Data');
    }

    public function eksportpenumpang(){
        $data = Penumpang::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('dashboard.penumpang.pdf');
        return $pdf->download('penumpang.pdf');
    }
}
