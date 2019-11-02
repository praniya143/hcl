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
        $location_id = $request->input('location_id');
        $from_date = $request->input('from_date');
        $to_date = $request->input('to_date');
        $room_type = $request->input('room_type');
        $number_of_rooms = $request->input('number_of_rooms');
        $checkHotelAvailability = DB::select( DB::raw("SELECT hd.*,b.* FROM `hotel_detail` hd JOIN `booking` b on hd.`id`=b.`hotel_id` WHERE hd.`location_id` = '".$location_id."' AND (check_in_date BETWEEN '".$from_date."' AND '".$to_date."') OR (check_out_date BETWEEN '".$from_date."' AND '".$to_date."') GROUP BY hd.`city_name`") );
        if(count($checkHotelAvailability)>0){
            echo '<div class="panel panel-default">
              <div class="panel-heading">Hotel Details</div>
              <div class="panel-body">No Data Found</div>
            </div>';
        }else{
            // $hotelInfo = DB::select( DB::raw("SELECT hd.*,hr.* FROM `hotel_detail` hd JOIN `hotel_room` hr ON hd.id=hr.hotel_id WHERE hd.`location_id`='".$location_id."' AND hr.room_type='".$room_type."'") );
            $hotelInfo = DB::select( DB::raw("SELECT `id`, `name`, `city_name`, `location_id`, `address`, `check_in_time`, `free_breakfast`, `photo`, `created_at`, `updated_at` FROM `hotel_detail` WHERE `location_id`='".$location_id."'") );
            return view('hotel_info',compact('hotelInfo','room_type'));        
        }
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
