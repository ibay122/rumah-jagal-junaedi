<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tamus = Tamu::latest()->paginate(20);

        return view('tamus.index', compact('tamus'))
            ->with('i', (request()->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tamus.create');
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
            'tanggal' => 'required',
            'waktu' => 'required',
            'nama' => 'required',
            'keperluan' => 'required'
        ]);

        Tamu::create($request->all());

        return redirect()->route('tamus')
            ->with('success', 'Tamu created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function show(Tamu $tamu)
    {
        return view('tamus.show', compact('tamu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function edit(Tamu $tamu)
    {
        return view('tamus.edit', compact('tamu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tamu $tamu)
    {
        $request->validate([
            'tanggal' => 'required',
            'waktu' => 'required',
            'nama' => 'required',
            'keperluan' => 'required'
        ]);
        $tamu->update($request->all());

        return redirect()->route('tamus')
            ->with('success', 'Tamu updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tamu $tamu)
    {
        $tamu->delete();

        return redirect()->route('tamus')
            ->with('success', 'Tamu deleted successfully');
    }
}
