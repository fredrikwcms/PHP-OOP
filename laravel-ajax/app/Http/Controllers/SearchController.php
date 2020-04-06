<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Item;

class SearchController extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function search(Request $request)
    {
        if($request->ajax()) {
            $output = "";

            $items = Item::where('name', 'LIKE', '%'.$request->search.'%')->get();

            if($items) {
                foreach($items as $item) {
                    $output = $item->name;
                }
                return $output;
            }
        }
        // $data = DB::table('items')
        //     ->where('name', 'like', '%'.$request.'%')
        //     ->get();

        // // return print_r($data);
        // return response()->json($data);
    }
}
