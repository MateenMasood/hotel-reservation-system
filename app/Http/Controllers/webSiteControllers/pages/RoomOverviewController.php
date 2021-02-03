<?php

namespace App\Http\Controllers\webSiteControllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\RoomType;
use App\Models\RoomTypeFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;


class RoomOverviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \View::make('webSite.pages.room-overview');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $roomDetail = RoomType::find($id);

        // dd( $roomDetail->hotel->nearByPlace[0]->nearByPlaceFile);

        return \View::make('webSite.pages.room-overview' , compact('roomDetail'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // ********************** get rooms list details here *********************

    public function roomsList(Request $request)
    {
        $now = strtotime($request->departureDate); // or your date as well
        $your_date = strtotime($request->arrivalDate  );
        $datediff = $now - $your_date;

        $noOfNightStay = round($datediff / (60 * 60 * 24));


        $callback = function($query) {
            $query->where('status', '=', '1');
        };

        $allRoomTypes = Hotel::  whereHas('roomType', $callback)->
                                        with(['roomType' => $callback  , 'roomType.roomTypeFile'])->
                                        where(['id' => $request->hotelId , 'status'=>'1'])->
                                        get();
    

        $listOfHotels =  Hotel::where('status' , '1')->get();

        // return $listOfHotels;
        $currentSelectedHotel = Hotel::find($request->hotelId);

        // return $currentSelectedHotel
 
        $bookingInitialInformation = array('checkIn' => $request->arrivalDate , 'checkOut' => $request->departureDate , 'noOfGuest' => $request->guests , 'noOfNightStay' => $noOfNightStay , 'hotelId' => $request->hotelId );
        return \View::make('webSite.pages.rooms-list' , compact('allRoomTypes' , 'bookingInitialInformation' , 'listOfHotels' , 'currentSelectedHotel'));

    }
}
