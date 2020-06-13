<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<table align="center" width="800px" style="border: 3px solid green;">
		<tr>
		    <td style=" border: 3px solid red">
		    	
		    	<p align="center">Nom :
		    	<strong> 
		    	<?php 
		    		echo $_POST['lastName'];
		    	?>
		    	</strong> !</p>
		    	<p align="center">Prénom :
		    	<strong> 
		    	<?php 
		    		echo $_POST['fisrtName'];
		    	?>
		    	</strong> !</p>
		    	<p align="center">Date de naissance :
		    	<strong> 
		    	<?php 
		    		echo $_POST['DayOfBirthday'];
		    	?>
		    	</strong> !</p>
		    	<p align="center">N de téléphone :
		    	<strong> 
		    	<?php 
		    		echo $_POST['NofPhone'];
		    	?>
		    	</strong> !</p>
		    </td>
		</tr>  
	</table>
</body>
</html>