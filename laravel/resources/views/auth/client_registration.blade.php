
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	</script>
	<style>
		img{
			display: block;
  			margin-left: auto;
 	 		margin-right: auto;
		}
		h1{
			text-align: center;
		}
		.register{
			margin: auto;
			background: whitesmoke;
			max-width: 350px;
			padding: 10px;
			border-radius: 4px;
		}
		input[type=text]{
			display: inline-block;
			width:100%;
			padding:10px;
			box-sizing:border-box;
			border-radius: 4px;
			border: .5px solid;
			margin: 10px 0;
		}
		input[type=password]{
			display: inline-block;
			width:100%;
			padding:10px;
			box-sizing:border-box;
			border-radius: 4px;
			border: .5px solid;
			margin: 10px 0;
		}
		input[type=submit]{
			width: 100%;
			padding: 10px;
			margin: 10px 0;
			border-radius: width 100%;
			padding: 10px;
			margin: 10px 4px;
			border: none;
			background: skyblue;
			font-size: 20px;
			cursor:pointer;
		}
		input[type=checkbox]{
			width: 100%;
			padding: 10px;
			margin: 10px 0;
			height:50%;
		}
		.remember-forgot{
			display: flex;
			justify-content: space-between;
			font-size: 15px;
			margin: auto;
			background: whitesmoke;
			max-width: 350px;
			padding: 10px;
			border-radius: 4px;
		}

	</style>

<title>BUS SCHEDULING SYSTEM</title>
</head>
</div>
	<div class="background">
	</div>
	<div class="register">
		<h1>Registration</h1>
		<form action='/auth/clients/register' method='post'>

            @csrf

            <label for="uname">Student Number: </label><br>
			<input required name="studentnumber"  class='form-control'/><br>

			<label for="mail">Email: </label><br>
			<input required type="text" id="mail" name="email" class= 'form-control'/>

			<label for="pword">Password:</label><br>
			<input required type="password" id="pword" name="password" class= 'form-control'/>

			<input required type="submit" class="btn btn-primary" value="Register" name='' >
			<p><a href="/">Already have an account?</a></p><br>

            @if($errors->any())
                @foreach ($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            @endif

		</form>
	</div>
</body>
</html>
