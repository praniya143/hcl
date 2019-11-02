<br>
	<center>
	<form action="/login" method="POST">
	{{ csrf_field() }}
	<input type="text" name="user_name" placeholder="User Name" >
	<input type="password" name="password" placeholder="Password" >
	
	<input type="submit" name="Login" />
	</form>
</center>
