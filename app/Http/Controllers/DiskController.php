<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disk;

class DiskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $discos = Disk::all();
        return view('disco.index', compact('discos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('disco.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $disco = new Disk();
        $disco->name = $request->name;
        $disco->artist = $request->artist;
        $disco->year = $request->year;
        $disco->genre = $request->genre;
        $disco->save();
        return redirect()->route('disk.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $disco = Disk::find($id);
        return view('disco.show', compact('disco'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('disco.edit', ['disco' => Disk::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $disco = Disk::find($id);
        $disco->name = $request->name;
        $disco->artist = $request->artist;
        $disco->year = $request->year;
        $disco->genre = $request->genre;
        $disco->save();
        return view('disco.show', compact('disco'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $disco = Disk::find($id);
        $disco->delete();
        return redirect()->route('disk.index');
    }
}
