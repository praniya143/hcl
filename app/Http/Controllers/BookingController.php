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
    public function index()
    {
		$hotelrooms = \App\HotelRoom::where('hotel_id','=','1')->get();
		
		
		return view('booking',compact('hotelrooms'));
    }

    
	public function history(Request $request) {
		$city = '';
		if($request->input('city')){
			$city = $request->input('city');
		}
		$history = \DB::table('booking')
            ->join('hotel_detail', 'booking.hotel_id', '=', 'hotel_detail.id')
			->join('location', 'hotel_detail.location_id', '=', 'location.id')
            ->join('user_auth', 'user_auth.id', '=', 'booking.customer_id')
            ->select('user_auth.name','hotel_detail.name As hotelname','booking_date','total_amount','no_of_persons','payment_type','check_in_date','check_out_date','location.city_name as city_name','location')
			->where('booking.customer_id',1);
		if($city!='') {
			$history->where('location.city_name','LIKE',"%$city%");
		}
        $res = $history->get()->toArray();

		
		return view("bookinghistory",compact('res','city'));

    }	
}
