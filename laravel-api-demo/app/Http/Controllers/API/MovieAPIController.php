<?php

   

namespace App\Http\Controllers\API;

   

use Illuminate\Http\Request;

use App\Http\Controllers\API\BaseController as BaseController;

use App\Movie;

use Validator;

use App\Http\Resources\Movie as MovieResource;

   

class MovieAPIController extends BaseController

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $movies = Movie::all();

    

        return $this->sendResponse(MovieResource::collection($movies), 'Movies retrieved successfully.');

    }

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $input = $request->all();

   

        $validator = Validator::make($input, [

            'title' => 'required',

            'body' => 'required'

        ]);

   

        if($validator->fails()){

            return $this->sendError('Validation Error.', $validator->errors());       

        }

   

        $movie = Movie::create($input);

   

        return $this->sendResponse(new MovieResource($movie), 'Movie created successfully.');

    } 

   

    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $movie = Movie::find($id);

  

        if (is_null($movie)) {

            return $this->sendError('Movie not found.');

        }

   

        return $this->sendResponse(new MovieResource($movie), 'Movie retrieved successfully.');

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Movie $movie)

    {

        $input = $request->all();

   

        $validator = Validator::make($input, [

            'title' => 'required',

            'body' => 'required'

        ]);

   

        if($validator->fails()){

            return $this->sendError('Validation Error.', $validator->errors());       

        }

   

        $movie->title = $input['title'];

        $movie->body = $input['body'];

        $movie->save();

   

        return $this->sendResponse(new MovieResource($movie), 'Movie updated successfully.');

    }

   

    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy(Movie $Movie)

    {

        $movie->delete();

   

        return $this->sendResponse([], 'Movie deleted successfully.');

    }

}