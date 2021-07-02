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
        return view('client.pondok', compact('pondok', 'pengajar', 'santri', 'pengajarCount', 'santriCount', 'pondokCount'));
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
        return view('client.detail', compact('pondok', 'pengajarCount', 'santriCount'));
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

        dd($request->all());
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
