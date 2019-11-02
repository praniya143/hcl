<div class="container">
@php
	$error = app('request')->input('error');
@endphp
@if(!isset($error)) {{ $error='' }} @endif
<br>
<form action="/login" method="POST">
  <div class="row">
	{{ csrf_field() }}
	<span class="row">
		<span class="col-xs-6"><a href="/">Home</a></span>
		<span class="col-xs-2">
			<input type="text" name="user_name" placeholder="User Name" class="form-control input-sm col-xs-3" />
		</span>
		<span class="col-xs-2">
			<input type="password" name="password" placeholder="Password" class="form-control input-sm col-xs-3" ><br>
		</span>
		<span class="col-xs-2">
			<input type="submit" name="Login" value="Login" class="btn btn-primary" />
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


