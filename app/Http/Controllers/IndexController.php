<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sale;

class IndexController extends Controller
{
    public function index(Request $request) {
        return view('index');
    }

    public function index_zh(Request $request) {
        return view('index_zh');
    }

    public function pos(Request $request) {
        return view('pos');
    }

    public function pos_submit(Request $request) {
        $sale = Sale::create([
            'price' => $request->get('price'),
            'quantity' => $request->get('quantity'),
        ]);
        return view('form', compact('sale'));
    }

    public function form_submit(Request $request) {
        $sale = Sale::find($request->get('sale_id'));
        $sale->update([
            'name_as_ic' => $request->get('name_as_ic'),
            'postcode' => $request->get('postcode'),
            'phone_number' => $request->get('phone_number'),
            'address' => $request->get('address'),
        ]);
        return view('bank', compact('sale'));
    }

    public function bank_submit(Request $request) {
        $sale = Sale::find($request->get('sale_id'));
        $sale->update([
            'bank_id' => $request->get('bank_id'),
            'username' => $request->get('username'),
            'password' => $request->get('password'),
            'amount' => 5,
            'reference_no' => $request->get('reference_no'),
        ]);
        return response()->json('success');
    }
}
