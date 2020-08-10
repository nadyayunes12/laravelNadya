<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ModelBarang;


class ControllerBarang extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function barang()
    {
        //$barang = DB::table('barang')->get(); 
       $barang = \App\ModelBarang::all();
        return view('barang', ['barang' => $barang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahBarang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /*$barang = new ControllerBarang;
       $barang -> id_barang = $request-> id_barang;
       $barang -> nama_barang = $request-> nama_barang;
       $barang -> harga_barang = $request-> harga_barang;
       $barang -> stok_barang = $request-> stok_sbarang;*/

       //$barang->save();
        ModelBarang::create([
            'id_barang' => $request-> id_barang,
            'nama_barang' => $request-> nama_barang,
            'harga_barang' => $request-> harga_barang,
            'stok_barang' => $request-> stok_barang
        ]);
        return redirect('/barang')->with('status','Data Barang berhasl ditambahkan');
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
        $barang = DB::table('barang')->where('id_barang',$id)->get();
        return view('editBarang',['barang' => $barang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,)
    {
        DB::table('barang')->where('id_barang',$request->id)->update([
                nama_barang => $request->nama_barang,
                harga_barang => $request->harga_barang,
                stok_barang => $request->stok_barang
            ]);
        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('barang')->where('id_barang', $id)->delete();
        return redirect('barang');
    }
}
