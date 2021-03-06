<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\pondok;
use App\Models\pengajar;
use App\Models\santri;

class PondokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pondok = pondok::all();
        $pengajar = pengajar::all();
        $santri = santri::all();
        $pondokCount = $pondok->count();
        $pengajarCount = $pengajar->count();
        $santriCount = $santri->count();
        // return $pondok;
        return view(
            'client.pondok',
            compact(
                'pondok',
                'pengajar',
                'santri',
                'pengajarCount',
                'santriCount',
                'pondokCount'
            )
        );
    }

    public function callform()
    {
        return view('admin.tambahpondok');
    }

    public function datapondok()
    {
        $pondok = pondok::all();
        return view(
            'admin.datapesantren',
            compact(
                'pondok'
            )
        );
    }

    public function detil($id)
    {
        $pondok = pondok::where('idpondok', $id)->get();
        $pengajar = pengajar::where('pondok_idpondok', $id)->get();
        $santri = santri::where('pondok_idpondok', $id)->get();
        $pengajarCount = $pengajar->count();
        $santriCount = $santri->count();
        // return $pengajarCount;
        // return 'detil' . $id;

        return view(
            'client.detail',
            compact('pondok', 'pengajarCount', 'santriCount')
        );
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
        $request->validate([
            'namapondok' => 'required|max:255',
            'alamatpondok' => 'required|max:255',
            'notelfon' => 'required|numeric',
            'webpondok' => 'required|max:255',
            'gambarpondok' => 'nullable|max:255',
        ]);

        $pondok = new pondok();

        $pondok->nama = $request->namapondok;
        $pondok->alamat = $request->alamatpondok;
        $pondok->no_telp = $request->notelfon;
        $pondok->web = $request->webpondok;
        $pondok->lintang = $request->latitudepondok;
        $pondok->bujur = $request->longitudepondok;

        // dd($pondok->all());

        $pondok->save();

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
