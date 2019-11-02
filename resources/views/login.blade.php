<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>


</style>
<div class="container">
<br>
<form action="/login" method="POST">
  <div class="row">
	{{ csrf_field() }}
	<span class="row">
		<span class="col-xs-6"></span>
		<span class="col-xs-2">
			<input type="text" name="user_name" placeholder="User Name" class="form-control input-sm col-xs-3" />
		</span>
		<span class="col-xs-2">
			<input type="password" name="password" placeholder="Password" class="form-control input-sm col-xs-3" ><br>
		</span>
		<span class="col-xs-2">
			<input type="submit" name="Login" />
		</span>
	</span>
	<span class="row @if($error=='')hide @endif">
		<span class="col-xs-6"></span>
		<span class="col-xs-2">
			<span style="color:red;"  class="@if($error!=1)hide @endif">*</span>&nbsp;
			<span class="@if($error!=1)hide @endif">Invalid Username</span>

		</span>
		<span class="col-xs-2 @if($error!=2)hide @endif">
			<span style="color:red;">*</span>&nbsp;
			<span class="@if($error!=2)hide @endif">Invalid Password</span>

		</span>

	</span>
	</div>
</form>

</div>


