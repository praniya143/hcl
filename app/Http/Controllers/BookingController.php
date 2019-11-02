<?php
namespace App\Http\Controllers;

use App\Booking;
use App\HotelRoom;
use Illuminate\Http\Request;
use DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		
		$data=$request->input();
		$hotelrooms = \App\HotelRoom::where('hotel_id','=','1')->get();
		
		
		return view('booking',compact('hotelrooms','data'));
    }
	
	 public function bookingstore(Request $request)
    {
		
		$data=$request->input();
		DB::table('booking')->insert($data);
		
		
		return view('booking',compact('hotelrooms','data'));
    }

    public function history() {

	    $history = \DB::table('booking')
		    ->join('hotel_detail', 'booking.hotel_id', '=', 'hotel_detail.id')
		    ->join('user_auth', 'user_auth.id', '=', 'booking.customer_id')
		    ->select('user_auth.name','hotel_detail.name As hotelname','booking_date','total_amount','no_of_persons','payment_type','check_in_date','check_out_date','city_name')
		    ->where('booking.customer_id',1)
		    ->get();

	    $res = $history->toArray();

	    return view("bookinghistory",compact('res'));


    }	
}
