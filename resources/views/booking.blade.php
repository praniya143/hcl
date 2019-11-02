<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

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
										<span class="form-label">Persons</span>
										<select class="form-control" name="ni_of_persons">
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
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

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



