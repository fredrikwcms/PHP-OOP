<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Post;

class LiveSearch extends Controller
{
    function index()
    {
     return view('search.live_search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = Post::all()
         ->where('title', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
      }
      else
      {
       $data = Post::all();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        echo "We have posts";
       }
      }
      else
      {
        echo "Sorry no posts found";
      }
    //   $data = array(
    //    'table_data'  => $output,
    //    'total_data'  => $total_row
    //   );

      echo json_encode($data);
     }
    }
}