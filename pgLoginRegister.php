<?php
include 'passwdRules.php';
$myPR=new myPasswordRules();
$rules="";
if (isset($_POST['pwd'])) {
	$pw_result=$myPR->checkPassword($_POST['pwd']);
	//$rules=$rules . "<h2>password set</h2>";
	if ($pw_result) {
		//$rules=$rules . "<h3>password OK</h3>";
		//and if everything else is validated . ..
		//encode password
		//set session password value, session username
		//register the user (in the database)
	}
}
$rules=$rules . implode('<br>',$myPR->showRules());
?>

<html>
<head>
<title>Registration Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
      <h2>Registration form</h2>
      <p>Registration is quick and free! All fields below are required.</p>
	  <p>
	  <?php
	  echo ('<div class="pwdRules">' . $rules . '</div>');
	  ?>
	  </p>
      <form action="/lib/login_register.php" method="post" name="regForm" id="regForm" >
        <table>
          <tr>
            <td>Choose your username</td>
            <td><input name="user_name" type="text" id="user_name" minlength="4" size="15">
              <input name="btnAvailable" type="button" id="btnAvailable"
			  value="Check Availability"></td>
          </tr>
          <tr>
		    <td>First name</td>
            <td><input name="fname" type="text" id="fname" size="25"></td>
		  </tr>
		  <tr>
		     <td>Last name</td>
		     <td><input name="lname" type="text" id="lname" size="25"></td>
		  </tr>
          <tr>
          <tr>
            <td>E-mail</td>
            <td><input name="usr_email" type="text" id="usr_email" size="25"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input name="pwd" type="password" id="pwd" size="25"></td>
          </tr>
          <tr>
            <td>Re-enter password</td>
            <td><input name="pwd2"  id="pwd2" type="password" size="25" equalto="#pwd"></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td width="22%"><strong>Image Verification </strong></td>
            <td width="78%"></td>
          </tr>
        </table>
        <p align="center">
          <input name="btnRegister" type="submit" id="Register" value="Register">
        </p>
      </form>
</body>
</html>