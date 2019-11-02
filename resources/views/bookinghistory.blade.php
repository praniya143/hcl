
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Booking History</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Booking History</h2>	
	<form class="form-horizontal" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">City:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="city" placeholder="city" name="city" value="<?php echo $city ?>">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="search" class="btn btn-default" value="search">Search</button>
      </div>
    </div>
  </form>
  <?php 
	if(!empty($res)) {
	
    ?>	
	
  <table class="table">
    <thead>
      <tr>
        <th>Customer Name</th>
		<th>Hotel Name</th>
		<th>City</th>
		<th>Location</th>
        <th>Booking Date</th>
        <th>Amount</th>
		<th>No.Of Persons</th>
		<th>Payment Type</th>
		<th>Check In</th>
		<th>Check Out</th>
      </tr>
    </thead>
    <tbody>
	 <?php foreach($res as $booking) { ?>
      <tr>
        <td><?php echo $booking->name; ?></td>
		<td><?php echo $booking->hotelname; ?></td>
		<td><?php echo $booking->city_name; ?></td>
		<td><?php echo $booking->location; ?></td>
        <td><?php echo $booking->booking_date; ?></td>
        <td><?php echo $booking->total_amount; ?></td>
		<td><?php echo $booking->no_of_persons; ?></td>
		<td><?php echo $booking->payment_type; ?></td>
		<td><?php echo $booking->check_in_date; ?></td>
		<td><?php echo $booking->check_out_date; ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
	<?php }else { ?>
  <table class="table">
<tr>
<td>
<span class="error">No Bookings Found</span>
</td>
</tr>
    </table>
   <?php } ?>
	
</div>

</body>
</html>