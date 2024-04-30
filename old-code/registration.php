
<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
	<script type="text/javascript">
function validate() {
    var username = document.getElementById("uname");
    var email = document.getElementById("mail");
    var password = document.getElementById("pword");

    if (username.value.trim() === "") {
        alert("Enter a username");
        uname.style.border = "solid 5px red";
        document.getElementById("lbuser").style.visibility = "visible";
        return false;
    } else if (password.value.trim() === "") {
        alert("Enter a password");
        pword.style.border = "solid 5px red";
        document.getElementById("pass").style.visibility = "visible";
        return false;
    } else if (password.value.trim().length < 5) {
        alert("Password is too short");
        pword.style.border = "solid 5px blue";
        document.getElementById("pass").style.visibility = "visible";
        return false;
    } else if (!isValidPassword(password.value)) {
        alert("Password must meet security requirements, please add numbers and special characters.");
        pword.style.border = "solid 5px orange"; // Adjust styling as needed
        document.getElementById("pass").style.visibility = "visible";
        return false;
    } else {
        return true;
    }
}

	// Additional function to check password strength
	function isValidPassword(password) {
    	// Password should contain at least one uppercase letter, one lowercase letter,
    	// one digit, and be at least 8 characters long
    	const passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    	return passwordPattern.test(password);
			
}
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
		<form onsubmit="return validate()" action='info.php' method='post'>
			<label for="uname">Username: </label><br>
			<input type="text" id="uname" name="username" class= 'form-control'/>
			<label id="lbuser" style="color: red; visibility: hidden;">Invalid</label><br>
			<label for="mail">Email: </label><br>
			<input type="text" id="mail" name="email" class= 'form-control'/>
			<label id="lbuser" style="color: red; visibility: hidden;">Invalid</label><br>
			<label for="pword">Password:</label><br>
			<input type="password" id="pword" name="password" class= 'form-control'/>
			<label id="pass" style="color: red; visibility: hidden;">Invalid</label><br>
			<input type="submit" class="btn btn-primary" value="Register" name='' >
			<p><a href="http://localhost/Project/webpage.php">Already have an account?</a></p><br>	
		</form>
	</div>
</body>
</html>