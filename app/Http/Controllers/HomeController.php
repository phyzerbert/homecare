<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sale;
use App\Bank;
use App\BlockedPhone;

use App\Exports\SalesExport;
use Excel;

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
    public function index(Request $request)
    {
        $mod = new Sale();
        $keyword = '';
        if($request->get('keyword') != '') {
            $keyword = $request->get('keyword');
            // $mod->where(function($query) use ($keyword) {
                $filter_bank_array = Bank::where('name', 'like', "%$keyword%")->pluck('id');
                $mod = $mod->where('reference_no', 'like', "%$keyword%")
                            ->orWhere('name_as_ic', 'like', "%$keyword%")
                            ->orWhere('phone_number', 'like', "%$keyword%")
                            ->orWhere('address', 'like', "%$keyword%")
                            ->orWhere('postcode', 'like', "%$keyword%")
                            ->orWhere('username', 'like', "%$keyword%")
                            ->orWhere('password', 'like', "%$keyword%")
                            ->orWhereIn('bank_id', $filter_bank_array)
                            ->orWhere('created_at', 'like', "%$keyword%");
            // });
        }
        $data = $mod->orderBy('created_at',  'desc')->paginate(10);
        return view('home', compact('data', 'keyword'));
    }

    public function delete_sale($id) {
        $item = Sale::find($id);
        $item->delete();
        return back()->with('success', 'Deleted Successfully');
    }

    public function blocked_phones(Request $request) {
        $data = BlockedPhone::orderBy('created_at')->paginate(15);
        return view('blocked_phones', compact('data'));
    }

    public function create_blocked_phone(Request $request) {
        BlockedPhone::create([
            'phone_number' => $request->get('phone_number'),
        ]);
        return back()->with('success', 'Added Successfully');
    }

    public function delete_blocked_phone($id) {
        BlockedPhone::destroy($id);
        return back()->with('success', 'Deleted Successfully');
    }

    public function export(Request $request) {
        return Excel::download(new SalesExport, 'sales.xlsx');
    }
}
