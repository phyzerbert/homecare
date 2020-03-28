<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sale;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Sale::orderBy('created_at', 'desc')->paginate(10);
        return view('home', compact('data'));
    }

    public function delete_sale($id) {
        $item = Sale::find($id);
        $item->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
