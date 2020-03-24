<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Auction;
use Validator;
use App\Http\Resources\Auction as AuctionResource;

class AuctionController extends BaseController

{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()

    {
        $auctions = Auction::all();

        return $this->sendResponse(AuctionResource::collection($auctions), 'Auctions retrieved successfully.');

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
            'details' => 'required'
        ]);

        if($validator->fails()){

            return $this->sendError('Validation Error.', $validator->errors());       

        }

        $auction = Auction::create($input);

        return $this->sendResponse(new AuctionResource($auction), 'Auction created successfully.');

    } 

   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)

    {
        $auction = Auction::find($id);

        if (is_null($auction)) {

            return $this->sendError('Auction not found.');

        }

        return $this->sendResponse(new AuctionResource($auction), 'Auction retrieved successfully.');

    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Auction $auction)

    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'title' => 'required',
            'details' => 'required'
        ]);

        if($validator->fails()){

            return $this->sendError('Validation Error.', $validator->errors());       

        }

        $auction->title = $input['title'];

        $auction->detail = $input['details'];

        $auction->save();

        return $this->sendResponse(new AuctionResource($auction), 'Auction updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Auction $auction)

    {
        $auction->delete();

        return $this->sendResponse([], 'Auction deleted successfully.');

    }

}