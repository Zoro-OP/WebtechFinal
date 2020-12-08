<?php include_once "../controller/registration.php" ;?>
<html>
	<head>
		<title>Registration</title>
		<script src="../js/validateuser.js"></script>
		<script>
function validateform(){
var name=document.registerform.name.value;
var password=document.registerform.password.value;
var username=document.registerform.username.value;
var email=document.registerform.email.value;
var phone=document.registerform.phone.value;
var haserror = 0;
if (isNaN(phone)){
  document.getElementById("number_error").innerHTML="Enter Numeric value only";
  haserror = 1;
}
if (username.indexOf(' ') !== -1) {

	 document.getElementById("username_error").innerHTML="Username can't contain space.";
	  haserror = 1;
 }
if (name==null || name==""){

	  document.getElementById("name_error").innerHTML="Name can't be blank";

  haserror = 1;
}

 if (password==null || password==""){
document.getElementById("password_error").innerHTML="Password can't be blank";
  haserror = 1;
}
 if (username==null || username==""){
	document.getElementById("username_error").innerHTML="Username can't be blank";
  haserror = 1;
}
if (email==null || email==""){
document.getElementById("email_error").innerHTML="Email can't be blank";
  haserror = 1;
}

if (phone==null || phone==""){
document.getElementById("number_error").innerHTML="Phone can't be blank";
  haserror = 1;
}



 if(password.length<8){
	document.getElementById("password_error").innerHTML="Password must be at least 8 characters long.";
  haserror = 1;
}
 if(username.length<6){
document.getElementById("username_error").innerHTML="Username must be at least 6 characters long.";
  haserror = 1;
}

for(i = 0 ; i<9 ; i++)
{
	if(name.indexOf(i)!==-1)
	{
		document.getElementById("name_error").innerHTML="Name must not be numeric.";
		haserror = 1;
		break;
	}

}
if (haserror==1){
	return false;
}
return true ;


}
</script>

</head>
	<body>

		<fieldset id="register_form" >
      <h1>Welcome to Registration.</h1>

			<form action="" method="post" onsubmit="return validateform()" name="registerform"   >
				<table>
          <tr>
          <td style="text-align: left;"> Name: </td>
          <td style="text-align: left;"><input type="text" name="name" value=<?php echo $name; ?>><span><?php echo $error_name; ?></span> </span> <span id="name_error"> </td>
          </tr>
          <tr>
          <td style="text-align: left;"> Username:</td>
          <td style="text-align: left;"><input type="text" name="username" value=<?php echo $username; ?>><span><?php echo $error_username; ?></span> </span> <span id="username_error"> </td>
          </tr>
          <tr>
          <td style="text-align: left;"> Password:</td>
          <td style="text-align: left;"><input type="password" name="password" value=<?php echo $password; ?>><span><?php echo $error_password; ?></span> </span> <span id="password_error"></td>
          </tr>

          <tr>
          <td style="text-align: left;">Email:</td>
          <td style="text-align: left;"><input type="text" name="email" value=<?php echo $email; ?> ><span><?php echo $error_email; ?></span> </span> <span id="email_error"></td>
          </tr>

          <tr>
          <td style="text-align: left;">Phone:</td>
          <td style="text-align: left;">
          <input type="text" name="phone"   value=<?php echo $phone_no; ?>> <span><?php echo $error_phone_no; ?></span> <span id="number_error"></span>

          </td>
          </tr>


          <tr>
          <td colspan="2" align="center">
          <input type="submit" name="signup" value="Register">
          </td>
          </tr>
				</table>
			</form>
			<p>Already a member ? </p> <span> <a href="../view/index.php"> Login </a></span>

		</fieldset>
	</body>
</html>