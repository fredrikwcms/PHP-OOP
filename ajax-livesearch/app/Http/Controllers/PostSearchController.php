<?php

namespace App\Http\Controllers;

use App\Post;
use Spatie\Searchable\Search;
use Illuminate\Http\Request;

class PostSearchController extends Controller
{
    
    // public function search(Request $request) {
    //     $results = (new Search())
    //     ->registerModel(Post::class, ['id', 'title'])
    //     ->search($request->input('query'));
    //     return view('search.search', [
    //         'results' => $results,
    //     ]);
    //     // return response()->json($results);
    // }

    function index()
    {
     return view('search.search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('posts')
         ->where('title', 'like', '%'.$query.'%')
         ->orWhere('content', 'like', '%'.$query.'%')
         ->get();
         
      }
      else
      {
       $data = DB::table('posts')
         ->orderBy('id', 'desc')
         ->get();
      }
     }
    }
}
