<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($kategori)
    {
        $kategoris = Kategori::all();
        return view('kategori.index', compact('kategoris'));

    }

    public function jumlahBarang($kategori = null)
    {
        $barangPerKategori = Kategori::leftJoin('barangs', 'kategoris.id', '=', 'barangs.kategori_id')
        ->select('kategoris.id','kategoris.nama AS nama_kategori', DB::raw('COUNT(barangs.id) AS jumlah_barang'))
        ->where('kategoris.id',$kategori)
        ->groupBy('kategoris.id','kategoris.nama')
        ->get();
        return view('kategori.index', compact('barangPerKategori'));

        // dd($barangPerKategori);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        //
    }
}
