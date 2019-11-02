<?php
namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
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
