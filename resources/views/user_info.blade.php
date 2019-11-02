<div class="container">
<br>
  <div class="row">
	{{ csrf_field() }}
	<span class="row">
		<span class="col-xs-6"></span>
		<span class="col-xs-2">
		</span>
		<span class="col-xs-2">
		@php
			echo $_SESSION['name'];
        	@endphp
		</span>
		<span class="col-xs-2">
		<a href="\logout"> LOGOUT </a>
		</span>
	</span>
  </div>

</div>


