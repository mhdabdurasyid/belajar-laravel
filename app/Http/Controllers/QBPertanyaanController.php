<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pertanyaan;

class QBPertanyaanController extends Controller
{
    public function index()
    {
        //$pertanyaan = DB::table('pertanyaan')->select('id', 'judul', 'isi', 'tanggal_dibuat')->get();

        $pertanyaan = Pertanyaan::all();

        return view('index', ['pertanyaan' => $pertanyaan]);
    }

    public function create()
    {
        return view('form_tambah_pertanyaan');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        // $query = DB::table('pertanyaan')->insert([
        //     'judul' => $request['judul'],
        //     'isi' => $request['isi'],
        //     'tanggal_dibuat' => date('Y/m/d')
        // ]);

        // $pertanyaan = new Pertanyaan;
        // $pertanyaan->judul = $request->judul;
        // $pertanyaan->isi = $request->isi;
        // $pertanyaan->tanggal_dibuat = date('Y/m/d');
        // $pertanyaan->save();

        $pertanyaan = Pertanyaan::create([
            'judul' => $request['judul'],
            'isi' => $request['isi'],
            'tanggal_dibuat' => date('Y/m/d')
        ]);

        return redirect('/pertanyaan')->with('sukses', 'Berhasil tambah pertanyaan');
    }

    public function show($id)
    {
        //$pertanyaan = DB::table('pertanyaan')->where('id', $id)->get();

        $pertanyaan = Pertanyaan::where('id', $id)->get();

        return view('detail_pertanyaan', ['pertanyaan' => $pertanyaan]);
    }

    public function destroy($id)
    {
        //$hapus = DB::table('pertanyaan')->where('id', $id)->delete();

        $hapus = Pertanyaan::destroy($id);

        return redirect('/pertanyaan')->with('hapus', 'Berhasil hapus pertanyaan');
    }

    public function edit($id)
    {
        //$pertanyaan = DB::table('pertanyaan')->where('id', $id)->get();

        $pertanyaan = Pertanyaan::where('id', $id)->get();

        return view('edit_pertanyaan', ['pertanyaan' => $pertanyaan]);
    }

    public function update($id, Request $request)
    {
        // $ubah = DB::table('pertanyaan')->where('id', $id)
        //     ->update([
        //         'judul' => $request['judul'],
        //         'isi' => $request['isi'],
        //         'tanggal_diperbarui' => date('Y/m/d')
        //     ]);

        $ubah = Pertanyaan::where('id', $id)->update([
            'judul' => $request['judul'],
            'isi' => $request['isi'],
            'tanggal_diperbarui' => date('Y/m/d')
        ]);

        return redirect('/pertanyaan')->with('sukses', 'Berhasil update pertanyaan');
    }
}
