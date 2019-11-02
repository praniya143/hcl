<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>


</style>
<form action="/login" method="POST">
<br><br>
<div class="container">
  <div class="row">
	{{ csrf_field() }}
	<span class="row">
		<span class="col-sm-4">
			<input type="text" name="user_name" placeholder="User Name" class="form-control" > <br>
		</span>
		<span class="col-sm-4">
			<span class="@if($error!=1)hide @endif">Invalid Username</span>
		</span>
	</span>
	<span class="row">
		<span class="col-sm-4">
			<input type="password" name="password" placeholder="Password" class="form-control" ><br>
		</span>
		<span class="col-sm-4">
			<span class="@if($error!=2)hide @endif"><span class="label-alert">*</span>Invalid Password</span>
		</span>
	</span>
		<input type="submit" name="Login" />
	<span>
</div>
</form>

