<?php

	if(isset($_REQUEST['msg'])){
		if($_REQUEST['msg'] == 'null'){
			echo "null submission...";
		}

		if($_REQUEST['msg'] == 'invalid'){
			echo "invalid userId/password";
		}

		if($_REQUEST['msg'] == 'login_first'){
			echo "please login first...";
		}
	}
?>
<center>
<form method="post" action="loginCheck.php">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>LOGIN</h3></legend>
					User Id<br/>
					<input type="text" name="userId"><br/>                               
					Password<br/>
					<input type="password" name="password">
					<br /><hr/>
					<input type="submit" name="submit" value="Login">
					<a href="registration.php">Register me</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>