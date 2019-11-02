<div class="container">
<br>
  <div class="row">
	{{ csrf_field() }}
	<span class="row">
		<span class="col-xs-6"><a href="\">Home</a> &nbsp; | &nbsp;</span>
		<span class="col-xs-6">
		<a href="\bookinghistory">Booking History</a> &nbsp; | &nbsp;
		@php
			echo $_SESSION['name'];
        	@endphp &nbsp; | &nbsp;
		<u><a href="\logout"> LOGOUT </a></u>
		</span>
	</span>
  </div>

</div>


