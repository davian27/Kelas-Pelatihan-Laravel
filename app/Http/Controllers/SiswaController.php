<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $database = Siswa::all();
        return view('pertemuan3.index',['database' => $database]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pertemuan3.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Siswa::create([
            'nis' => $request -> nis,
            'nama' => $request -> nama,
            'gender' => $request -> gender,
            'kelas' => $request -> kelas,
        ]);
        return redirect() -> route('data-siswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $database = Siswa::find($id);
        return view('pertemuan3.detail',['database' => $database]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $database = Siswa::findorfail($id);
        return view('pertemuan3.edit',['database'=> $database]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $database = Siswa::find($id);
        $database -> update
        (['nis'=> $request->nis,
        'nama'=>$request->nama,
        'gender'=>$request->gender,
        'kelas'=>$request->kelas]);

        return redirect() -> route('data-siswa.index', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Siswa::where('id', $id)->delete();

        return redirect() -> route('data-siswa.index');
    }
}
