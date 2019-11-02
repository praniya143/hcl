<?php

namespace App\Http\Controllers;

use App\HotelDetail;
use Illuminate\Http\Request;
use App\Location;
use Session;
use DB;
class HotelDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Search hotel
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $cities = \App\Location::select('city_name')->groupBy('city_name')->get();
        return view('hotel_search',compact('cities'));
    }
    public function getHotelDetails(Request $request)
    {
        //SELECT hd.*,b.* FROM `hotel_detail` hd JOIN `booking` b on hd.`id`=b.hotel_id WHERE hd.location_id = "1" AND (check_in_date BETWEEN '2019-11-04' AND '2019-11-11') OR (check_out_date BETWEEN '2019-11-04' AND '2019-11-11') GROUP BY hd.city_name
    }
    public function getLocationDetails(Request $request)
    {
        $city = $request->input('city');
        $locations = \App\Location::where('city_name', 'LIKE', "%$city%")->select('id','location')->get();
        echo '<option value="">Select Location</option>';
        if(count($locations)>0){
            foreach($locations as $location){
                echo "<option value='".$location->id."'>".$location->location."</option>";
            }
        }
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
     * @param  \App\HotelDetail  $hotelDetail
     * @return \Illuminate\Http\Response
     */
    public function show(HotelDetail $hotelDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HotelDetail  $hotelDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(HotelDetail $hotelDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HotelDetail  $hotelDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HotelDetail $hotelDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HotelDetail  $hotelDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(HotelDetail $hotelDetail)
    {
        //
    }
}
