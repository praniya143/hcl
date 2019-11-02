
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Booking History</h2>
  <?php 
	if(!empty($res)) {
	
    ?>	
	
  <table class="table">
    <thead>
      <tr>
        <th>Customer Name</th>
		<th>Hotel Name</th>
		<th>City</th>
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