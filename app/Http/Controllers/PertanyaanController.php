<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pertanyaan;

class PertanyaanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan = Pertanyaan::all();

        return view('index', ['pertanyaan' => $pertanyaan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form_tambah_pertanyaan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $pertanyaan = Pertanyaan::create([
            'judul' => $request['judul'],
            'isi' => $request['isi'],
            'tanggal_dibuat' => date('Y/m/d')
        ]);

        return redirect('/pertanyaan')->with('sukses', 'Berhasil tambah pertanyaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pertanyaan = Pertanyaan::find($id);

        return view('detail_pertanyaan', ['pertanyaan' => $pertanyaan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pertanyaan = Pertanyaan::find($id);

        return view('edit_pertanyaan', ['pertanyaan' => $pertanyaan]);
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
        $ubah = Pertanyaan::where('id', $id)->update([
            'judul' => $request['judul'],
            'isi' => $request['isi'],
            'tanggal_diperbarui' => date('Y/m/d')
        ]);

        return redirect('/pertanyaan')->with('sukses', 'Berhasil update pertanyaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Pertanyaan::destroy($id);

        return redirect('/pertanyaan')->with('hapus', 'Berhasil hapus pertanyaan');
    }
}
