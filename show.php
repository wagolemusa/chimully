<?php
include("includes/db.php");


	session_start();
	require_once('config.php');
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chimuly Investment</title>

</head>

<div class="wago">
<a href="index.php" style="float:right; font-size:36px; color:#FFF;">Home</a>
</div>

<body bgcolor="#000000">
<center>
 <table width="500" cellspacing="10" cellpadding="20" style="color:yellow; font-size:23px; float:center; ">
       
		  
  
		<td> name	</td>
		<th> email</td>
        <th> phone</td>
        <td> message</td>



  
		  <?php  
        
        
	//if(($_FILES['file']['type'] == 'image/gif')
	//|| ($_FILES['file']['type'] == 'image/jpeg')
	//|| ($_FILES['file']['type'] == 'image/pjpeg')
	//&& ($_FILES['file']['size'] < 200000))
	
	
	
        
		include('insert.php');
		$result = $db->prepare("SELECT * FROM contact ORDER BY id DESC ");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
    
		<tr>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['message']; ?></td>
      
	  
        </tr>
	<?php
		}
	?>

			
	</table>	

</center>

</body>
</html>