<?php
    session_start();
    //print_r($_SESSION);

?>

<center>
<form method="post" action="../controller/logincheck.php" enctype="">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>LOGIN</h3></legend>
					User Id<br/>
					<input type="text" name="id"><br/>                               
					Password<br/>
					<input type="password" name="password">
					<br /><hr/>
					<input type="button" value="Login">
					<a href="registration.html">Register</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>