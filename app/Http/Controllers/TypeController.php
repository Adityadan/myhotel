<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();

        return view('type.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('type.formcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Type();
        $data->name = $request->get("type_name");
        $data->save();

        return redirect()->route('type.index')->with('status', 'Horray!, Your data is successfully recorded !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        $data = $type;

        return view('type.formedit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $updateData = $type;
        $updateData->name = $request->type_name;
        $updateData->save();
        return redirect()->route('type.index')->with('status', 'Horray ! Your data is successfully updated !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        try {
            $deletedData = $type;
            $deletedData->delete();
            return redirect()->route('type.index')->with('status', 'Horray ! Your data is successfully deleted !');
        } catch (\PDOException $ex) {
            // Failed to delete data, then show exception message
            $msg = "Failed to delete data ! Make sure there is no related data before deleting it";
            return redirect()->route('type.index')->with('status', $msg);
        }
    }
    public function getEditForm(Request $request)
    {
        $id = $request->id;
        $data = Type::find($id);
        return response()->json(array('status' => 'oke', 'msg' => view('type.getEditForm', compact('data'))->render()), 200);
    }
    public function getEditFormB(Request $request)
    {
        $id = $request->id;
        $data = Type::find($id);
        return response()->json(array('status' => 'oke', 'msg' => view('type.getEditFormB', compact('data'))->render()), 200);
    }
    public function saveDataTD(Request $request)
    {
        $id = $request->id;
        $data = Type::find($id);
        $data->name = $request->name;
        $data->save();
        return response()->json(array(
            'status' => 'oke',
            'msg' => 'type data is up-to-date !'
        ), 200);
    }
    public function deleteData(Request $request)
    {
        $id = $request->id;
        $data = Type::find($id);
        $data->delete();
        return response()->json(array(
            'status' => 'oke',
            'msg' => 'type data is removed !'
        ), 200);
    }
}
