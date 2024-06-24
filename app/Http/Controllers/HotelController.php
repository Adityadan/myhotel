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
        $rs = Hotel::orderBy('name', 'asc')->get();
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
        return view('hotel.index', compact('rs'));

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

    public function availableHotelRooms()
    {
        $rs = Hotel::join('products as p', 'hotels.id', '=', 'p.hotel_id')
            ->select('hotels.id', 'hotels.name', DB::raw('sum(p.available_room) as room'))
            ->groupBy('hotels.id', 'hotels.name')
            ->get();

        return view('hotel.availableRoom', compact('rs'));
    }

    function avgPriceByHotelType()
    {
        $rs = DB::table('hotels')
            ->leftJoin('products', 'hotels.id', '=', 'products.hotel_id')
            ->leftJoin('types', 'hotels.type_id', '=', 'types.id')
            ->select('hotels.id', 'hotels.name', 'types.name as type', DB::raw('AVG(products.price) as avg_price'))
            ->groupBy('hotels.id', 'hotels.name', 'types.name')
            ->get();
        return view('hotel.avgPriceByHotelType', compact('rs'));
    }

    public function list_hotels()
    {
        $data = Hotel::all();
        return view('hotel.list_hotel', compact('data'));
    }

    public function showInfo()
    {
        $result = Hotel::join('products as p', 'hotels.id', "=", 'p.hotel_id')->orderBy('p.price', 'DESC')
            ->select('hotels.name')->first();
        return response()->json(array(
            'status' => 'oke',
            'msg' => "<div class='alert alert-info'>
        Did you know? <br>The most expensive product is " . $result->name . "</div>"
        ), 200);
    }

    public function showProducts()
    {
        $hotel = Hotel::find($_POST['hotel_id']);
        $nama = $hotel->name;
        $data = $hotel->products;
        return response()->json(array(
            'status' => 'oke',
            'msg' => view('hotel.showProducts', compact('nama', 'data'))->render()
        ), 200);
    }
    public function uploadLogo(Request $request)
    {
        $hotel_id = $request->hotel_id;
        $hotel = Hotel::find($hotel_id);
        return view('hotel.formUploadLogo', compact('hotel'));
    }
    public function simpanLogo(Request $request)
    {
        $file = $request->file("file_logo");
        $folder = 'logo';
        $filename = $request->hotel_id . ".jpg";
        $file->move($folder, $filename);
        return redirect()->route('hotels.index')->with('status', 'logo terupload');
    }

    public function uploadPhoto(Request $request)
    {
        $hotel_id = $request->hotel_id;
        $hotel = Hotel::find($hotel_id);
        return view('hotel.formUploadPhoto', compact('hotel'));
    }

    public function simpanPhoto(Request $request)
    {
        $file = $request->file("file_photo");
        $folder = 'images';
        $filename = time() . "_" . $file->getClientOriginalName();
        $file->move($folder, $filename);
        $hotel = Hotel::find($request->hotel_id);
        $hotel->image = $filename;
        $hotel->save();
        return redirect()->route('hotels.index')->with('status', 'photo terupload');
    }
}
