<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //pake raw query
       // $rs=DB::select("select * from hotels ");
        //pake querybuilder
        //$rs=DB::table("hotels")
        //      ->where('name','like','%nor%')
        //      ->whereRaw("name like '%nor%'")
        //     ->get();
        //pake model
        //$rs=Hotel::where('name','like','%nor%')->get();
        //$rs=Hotel::all();
        $rs=Hotel::orderBy('name','asc')->get();
       // dd($rs);

        //$rs=DB::table("hotels")
        //            ->selectRaw('city,count(id) as jumlah')
        //            ->groupBy('city')
        //            ->get();
        //$rs=Hotel::selectRaw('city,count(id) as jumlah')
        //            ->groupBy('city')
        //            ->get();
        //dd($rs);
        //$jum=DB::table("hotels")->count();
        //echo $jum;
        return view('hotel.index',compact('rs'));

        //return view('hotel.index',['rs'=>$rs]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
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
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        //
    }
}
