<?php

namespace App\Http\Controllers;

use App\Models\Getintouch;
use Illuminate\Http\Request;

class GetintouchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getintouchs = Getintouch::all();
        return view('getintouchs.index', [
            'getintouchs' => $getintouchs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('getintouchs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'alamat' => 'required',
            'email' => 'required',
            'whatsupp' => 'required',
            'jamkerja' => 'required',
        ]);

        Getintouch::create($request->all());

        return redirect()->route('getintouchs.index')->with
        ('success', 'Get In Touch sudah berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Getintouch  $getintouch
     * @return \Illuminate\Http\Response
     */
    public function show(Getintouch $getintouch)
    {
        return view('getintouchs.show', compact('getintouch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Getintouch  $getintouch
     * @return \Illuminate\Http\Response
     */
    public function edit(Getintouch $getintouch)
    {
        return view('getintouchs.edit', compact('getintouch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Getintouch  $getintouch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Getintouch $getintouch)
    {
        $request -> validate([
            'alamat' => 'required',
            'email' => 'required',
            'whatsupp' => 'required',
            'jamkerja' => 'required',
        ]);

        $getintouch->update($request->all());

        return redirect()->route('getintouchs.index')->with
        ('success', 'Get In Touch sudah berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Getintouch  $getintouch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Getintouch $getintouch)
    {
        $getintouch->delete();

        return redirect()->route('getintouchs.index')->with
        ('success', 'Get In Touch berhasil dihapus.');
    }
}
