<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rs = Product::all();
        foreach ($rs as $r) {
            $directory = storage_path("app/public/product/" . $r->id);
            $files = File::files($directory);
            $filenames = [];
            foreach ($files as $file) {
                $filenames[] = $file->getFilename();
            }
            $r['filenames'] = $filenames;
        }
        return view('product.index', compact('rs'));
    }
    public function showAjax(Request $request)
    {
        $id = ($request->get('id'));
        $data = Product::find($id);
        return response()->json(array(
            'msg' => view('barang.showModal', compact('data'))->render()
        ), 200);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hotel = Hotel::all();
        return view('product.formcreate', compact('hotel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->available_room = $request->get('available_room');
        $product->hotel_id = $request->get('hotel_id');
        $product->save();

        return redirect()->route('products.index')->with('status', 'Horray!, Your transaction is successfully recorded!');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $rs = Product::with('hotel')->find($id);

        return view('product.show', compact('rs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {

        $data = $product;
        $hotels = Hotel::all();

        return view('product.formedit', compact('data', 'hotels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->available_room = $request->get('available_room');
        $product->hotel_id = $request->get('hotel_id');
        $product->save();

        return redirect()->route('products.index')->with('status', 'Horray ! Your data is successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        try {
            $deletedData = $product;
            $deletedData->delete();
            return redirect()->route('products.index')->with('status', 'Horray ! Your data is successfully deleted !');
        } catch (\PDOException $ex) {
            // Failed to delete data, then show exception message
            $msg = "Failed to delete data ! Make sure there is no related data before deleting it";
            return redirect()->route('products.index')->with('status', $msg);
        }
    }

    public function getEditForm(Request $request)
    {
        $id = $request->id;
        $data = Product::find($id);
        $hotels = Hotel::all();

        return response()->json(array('status' => 'oke', 'msg' => view('product.getEditForm', compact('data', 'hotels'))->render()), 200);
    }
    public function deleteData(Request $request)
    {
        $id = $request->id;
        $data = Product::find($id);
        $data->delete();
        return response()->json(array(
            'status' => 'oke',
            'msg' => 'type data is removed !'
        ), 200);
    }
}
