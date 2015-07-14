<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chimuly Investment</title>
</head>

<body bgcolor="#000000">
<div class="wago">
<a href="index.php" style="float:right; font-size:36px; color:#FFF;">Home</a>
</div>
<table align="center" bgcolor="#0000FF">
<tr>
	<td>
		
       
		
			Login
		</div>
		<form action="reg.php" method="POST">
			<div id="me"><p><br/><br/>
			<div class="form-group">
				<label for="name">Username</label>
				<input type="text" name="username" id="username" value="" placeholder="Username" autofocus required style="height: 30px; width: 300px;" /><br/>
			</div></p><br/><br/>
			<div class="form-group">
            	
				<label for="name">Password</label>
				<input type="password" value="" name="password" id="password" placeholder="Password" required style="height: 30px; width: 300px;" />
			</div></p>
            </div>
			<div>
				<?php
					if(!empty($message)) {
						echo "<p style='color: red; padding: 2px;'>".$message."</p>";
					}
				?>
			</div><br/><br/>
			<div class="control-group" style="margin-top: 10px;">
				<input type="submit" name="login " value="login"/>
			</div>
		</form>
		</div>
	</td>
</tr>
</table>
    
</body>
</html>