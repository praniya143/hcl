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

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

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
						<form action="#" method="post" name="bookingform">
							<div class="form-header">
								<h2>Make your booking</h2>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check In</span>
										<input class="form-control" type="date" required>
									</div>
								</div>
								</div>
								<br>
								<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check Out</span>
										<input class="form-control" type="date" required>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Persons</span>
										<select class="form-control">
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
							<div class="form-group">
								<span class="form-label">Email</span>
								<input class="form-control" type="email" placeholder="Enter your email">
							</div>
							<br>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control" type="tel" placeholder="Enter your phone number">
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

</html>