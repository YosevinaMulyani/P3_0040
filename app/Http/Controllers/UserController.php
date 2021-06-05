<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PasienController;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class usercontroller extends Controller
{
    public function index()
    {
     // mengambil data dari table pegawai
     $pasien = DB::table('pasien')->get();
     // mengirim data pegawai ke view index
     return view('index0040',['pasien' => $pasien]);
    }

    public function tambah()
    {
        return view('tambah0040');
    }

    public function edit($id)
    {
        $pasien = DB::table('pasien')->where('id',$id)->get();
        return view('edit0040',['pasien' => $pasien]);

    }

    public function update(Request $request)
    {
        DB::table('pasien')->where('id',$request->id)->update([
        'nama' => $request->nama,
        'alamat' => $request->alamat
        ]);
            return redirect('/pasien');
    }
    
    public function store(Request $request)
    {
        // insert data ke table pasien
        DB::table('pasien')->insert([
        'id' => $request->id,
        'nama' => $request->nama,
        'alamat' => $request->alamat,
        ]);
        // alihkan halaman ke  URL halaman pasien
        return redirect('/pasien');
    
    }

    public function hapus($id)
    {
        DB::table('pasien')->where('id',$id)->delete();
        return redirect('/pasien');

    }

    public function cari(Request $request)
    {
        $cari=$request->lihat;
        $pasien=DB::table('pasien')->where('nama','like',"%".$cari."%")->paginate();
        return view('index0040',['pasien' => $pasien]);

    }
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
        //
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
