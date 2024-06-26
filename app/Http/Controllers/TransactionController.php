<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = Transaction::all();
        $transaction = Transaction::all();
        $data = $transaction;
        $customers = Customer::all();
        $users = User::all();
        $product = Product::all();
        return view('transaction.index', compact('data','customers','users','product'));
    }

    public function showAjax(Request $request)
    {
        $id = ($request->get('id'));
        $data = Transaction::find($id);
        $products = $data->products;
        return response()->json(array(
            'msg' => view('transaction.showModal', compact('data', 'products'))->render()
        ), 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::all();
        $product = Product::all();
        $users = User::all();
        return view('transaction.formcreate', compact('customers', 'users', 'product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transaction = new Transaction();
        $transaction->customer_id = $request->get('customer_id');
        $transaction->user_id = $request->get('user_id');
        $transaction->transaction_date = $request->get('transaction_date');
        $transaction->save();

        $productId = $request->get('product_id');
        $quantity = $request->get('quantity');

        $product = Product::findOrFail($productId);

        $subtotal = $product->price * $quantity;

        $transaction->products()->attach($productId, [
            'quantity' => $quantity,
            'subtotal' => $subtotal
        ]);

        return redirect()->route('transaction.index')->with('status', 'Horray!, Your transaction is successfully recorded!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        // dd($transaction);
        $transaction = Transaction::with('products')->find($transaction->id);
        $data = $transaction;
        $customers = Customer::all();
        $users = User::all();
        $product = Product::all();
        return view('transaction.formedit', compact('data','customers','users','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        $transaction->customer_id = $request->get('customer_id');
        $transaction->user_id = $request->get('user_id');
        $transaction->transaction_date = $request->get('transaction_date');
        $transaction->save();

        $productId = $request->get('product_id');
        $quantity = $request->get('quantity');

        $product = Product::findOrFail($productId);

        $subtotal = $product->price * $quantity;

        $transaction->products()->attach($productId, [
            'quantity' => $quantity,
            'subtotal' => $subtotal
        ]);

        return redirect()->route('transaction.index')->with('status', 'Horray!, Your transaction is successfully recorded!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        try {
            $deletedData = $transaction;
            $deletedData->delete();
            return redirect()->route('transaction.index')->with('status', 'Horray ! Your data is successfully deleted !');
        } catch (\PDOException $ex) {
            $msg = "Failed to delete data ! Make sure there is no related data before deleting it";
            return redirect()->route('transaction.index')->with('status', $msg);
        }
    }

    public function getEditForm(Request $request)
    {
        $transaction = Transaction::with('products')->find($request->id);
        $data = $transaction;
        $customers = Customer::all();
        $users = User::all();
        $product = Product::all();
        return response()->json(array('status' => 'oke', 'msg' => view('type.getEditForm', compact('data','customers','users','product'))->render()), 200);
    }
    public function deleteData(Request $request)
    {
        $id = $request->id;
        $data = Transaction::find($id);
        $data->delete();
        return response()->json(array(
            'status' => 'oke',
            'msg' => 'type data is removed !'
        ), 200);
    }
}
