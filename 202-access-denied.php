<? include_once($_SERVER['DOCUMENT_ROOT'] . '/202-config/connect.php'); 

//just redirect to the login screen
header('location: /' . LOGIN_URI); die(); 
/*
info_top(); ?>

	<form method="post" action="">
		<input type="hidden" name="token" value="<? echo $_SESSION['token']; ?>"/>
		<table cellspacing="0" cellpadding="5" style="margin: 0px auto;" >
			<? if ($error['token']) { printf('<tr><td colspan="2">%s</td></tr>', $error['token']); } ?>
			<tr>
				<td>Username:</td>
				<td><input id="user_name" type="text" name="user_name" value="<? echo $html['user_name']; ?>"/></td>
			</tr>
			<? if ($error['user']) { printf('<tr><td colspan="2">%s</td></tr>', $error['user']); } ?>
			<tr>
				<td>Password:</td>
				<td>
					<input id="user_pass" type="password" name="user_pass"/>
					<span id="forgot_pass">(<a href="/202-lost-pass.php">I forgot my password/username</a>)</a>
				</td>
			</tr>
			<tr>
				<td/>
				<td><input id="submit" type="submit" value="Sign In"/></td>
			</tr>
		</table>
	</form>
	
<? info_bottom(); */?>