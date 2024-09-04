<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBahanRequest;
use App\Http\Requests\UpdateBahanRequest;
use App\Models\Material;
use Illuminate\Http\Request;
use Pest\Support\View;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materials = Material::filter()->get();
        return view('materials.index', compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('materials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBahanRequest $request)
    {
        $data = $request->validated();

        Material::create($data);

        return to_route('materials.index')->with('success', 'Berhasil Tambah Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        return view('materials.edit', ['material' => $material]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBahanRequest $request, Material $material)
    {
        $data = $request->validated();

        $material->update($data);

        return to_route('materials.index')->with('success', 'Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        $material->delete();
        return back()->with('success', 'Data Berhasil Dihapus');
    }
}
