<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ModelSupplier;

class ControllerSupplier extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function supplier()
    {
       // $supplier = DB::table('supplier')->get();
       $supplier = \App\ModelSupplier::all(); 
        return view('supplier', ['supplier' => $supplier]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahSupplier');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ModelSupplier::create([
        'nama_supplier' => $request-> nama_supplier,
        'nama_barang' => $request-> nama_barang,
        'harga_barang' => $request-> harga_barang,
        'jumlah_jual' => $request-> jumlah_jual
        ]);
       return redirect('/supplier')->with('status','Data supplier berhasl ditambahkan');
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
        $supplier = DB::table('supplier')->where('id_supplier',$id)->get();
        return view('editsupplier',['supplier' => $supplier]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('supplier')->where('id_supplier',$request->id)->update([
                nama_supplier => $request->nama_supplier,
                nama_barang => $request->nama_barang,
                harga_barang => $request->harga_barang,
                jumlah_jual => $request->jumlah_jual
            ]);
        return redirect('/supplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('supplier')->where('id_supplier', $id)->delete();
        return redirect('supplier');
    }
}
