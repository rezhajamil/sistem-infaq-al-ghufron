<?php

namespace App\Http\Controllers;

use App\Models\JadwalJumat;
use App\Models\JumatSchedule;
use Illuminate\Http\Request;

class JadwalJumatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumat = JadwalJumat::all();
        return view('jumat.index', compact('jumat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jumat.create');
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
            'tanggal' => 'required|date',
            'imam' => 'required',
            'khotib' => 'required'
        ]);

        $jumat = JadwalJumat::create($request->all());

        return redirect()->route('jumat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JumatSchedule  $jumatSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(JadwalJumat $jumatSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JumatSchedule  $jumatSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(JadwalJumat $jumat)
    {
        return view('jumat.edit', compact('jumat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JumatSchedule  $jumatSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'imam' => 'required',
            'khotib' => 'required'
        ]);

        $jumat = JadwalJumat::find($id);

        $jumat->tanggal = $request->tanggal;
        $jumat->imam = $request->imam;
        $jumat->khotib = $request->khotib;
        $jumat->save();


        return redirect()->route('jumat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JumatSchedule  $jumatSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jumat = JadwalJumat::find($id);
        JadwalJumat::destroy($jumat->id);

        return back();
    }
}
