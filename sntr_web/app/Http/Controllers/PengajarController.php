<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\pengajar;
use App\Models\pondok;

class PengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function datapengajar()
    {
        $pengajar = DB::table('pengajar')
            ->join('pondok', 'idpondok', '=', 'pondok_idpondok')
            ->select('pondok.nama as nama_pondok', 'pengajar.*')
            ->get();

        return view(
            'admin.datapengajar',
            compact(
                'pengajar'
            )
        );
    }
    public function callform()
    {
        $pondok = pondok::all();

        return view('admin.tambahpengajar', compact('pondok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dump($request->all());
        $request->validate([
            'namapengajar' => 'required|max:255',
            'alamatpengajar' => 'required|max:255',
            'notelfon' => 'required|Numeric',
        ]);

        $pengajar = new pengajar();

        $pengajar->nama = $request->namapengajar;
        $pengajar->alamat = $request->alamatpengajar;
        $pengajar->no_telp = $request->notelfon;
        $pengajar->pondok_idpondok = $request->idpondok;


        // dd($pengajar->all());

        $pengajar->save();

        return redirect()->route('home');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
