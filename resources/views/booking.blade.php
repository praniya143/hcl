<!DOCTYPE html>
<html lang="en">

<head>
	
	<title>Booking Form</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg"></div>
						<form action="/bookingstore" method="post" name="bookingform">
						@csrf
							<div class="form-header">
								<h2>Make your booking</h2>
							</div>
							<div class="row">
							<input type="hidden" name="hotel_id" value="{{request()->route('id')}}">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Room Type</span>
										<select class="form-control" name="hotel_room_id" id="hotel_room_id" >
										<option>Select Type</option>
										@foreach ($hotelrooms as $rooms)
										<option myCost="{{ $rooms->cost }}" value="{{ $rooms->id }}">{{ $rooms->room_type }}  </option>	  
										@endforeach
											
											
										</select>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Cost</span>
										<input class="form-control" type="text" name="total_amount" id="total_amount" readonly placeholder="Cost">
									</div>
							</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check In</span>
										<input class="form-control" type="date" name="check_in_date" required>
									</div>
								</div>
							</div>
								<br>
								<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check Out</span>
										<input class="form-control" type="date" name="check_out_date" required>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">No of Persons</span>
										<select class="form-control" name="no_of_persons">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								
							</div>
							<br>
							
							<div class="form-btn">
								<button class="submit-btn">Book Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

<script>


$(document).ready(function() {
$("#hotel_room_id").change(function(){
	var element = $(this);
           var option = $('option:selected', this).attr('myCost');

            $('#total_amount').val(option);
});

});

</script>
</html>



