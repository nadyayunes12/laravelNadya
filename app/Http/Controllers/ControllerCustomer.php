<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ModelCustomer;


class ControllerCustomer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function customer()
    {
      // $customer = DB::table('customer')->get(); 
        $customer = \App\ModelCustomer::all();
        return view('customer', ['customer' => $customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahCustomer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       ModelCustomer::create([
        'nama_customer' => $request-> nama_customer,
        'nama_barang' => $request-> nama_barang,
        'harga_barang' => $request-> harga_barang,
        'jumlah_beli' => $request-> jumlah_beli
        ]);
       return redirect('/customer')->with('status','Data customer berhasl ditambahkan');
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
        $customer = DB::table('customer')->where('id_customer',$id)->get();
        return view('editCustomer',['customer' => $customer]);
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
        DB::table('customer')->where('id_customer',$request->id)->update([
                nama_customer => $request->nama_customer,
                nama_barang => $request->nama_barang,
                harga_barang => $request->harga_barang,
                jumlah_beli => $request->jumlah_beli
            ]);
        return redirect('/customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('customer')->where('id_customer', $id)->delete();
        return redirect('customer');
    }
}
