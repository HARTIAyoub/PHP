<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<table align="center" width="800px" style="border: 3px solid green;">
		<tr>
			<td>
				<?php
					if (empty($_POST['lastName'])){
						$msg1="ERREUR : Nom non saisi !";
						echo "<font color='red'>" . $msg1 . "</font><br/>";
						$stop=True;
					}
					if (empty($_POST['fisrtName'])){
						$msg1="ERREUR : Prénom non saisi !";
						echo "<font color='red'>" . $msg1 . "</font><br/>";
						$stop=True;
					}
					if (empty($_POST['DayOfBirthday'])){
						$msg1="ERREUR : Date de naissance non saisi !";
						echo "<font color='red'>" . $msg1 . "</font><br/>";
						$stop=True;
					}else{
						if (!preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-[0-9]{4}$/",$_POST['DayOfBirthday']))
						    {
						    	$msg1="ERREUR : Vérifier que les dates entrées par vous sont dans le JJ-MM-AAAA !";
						    	echo "<font color='red'>" . $msg1 . "</font><br/>";
						    	$stop=True;
						    }
					}
					if (empty($_POST['NofPhone'])){
						$msg1="ERREUR : N de téléphone non saisi !";
						echo "<font color='red'>" . $msg1 . "</font><br/>";
						$stop=True;
					}
					if (empty($_POST['Mail'])){
						$msg1="ERREUR : Email non saisi !";
						echo "<font color='red'>" . $msg1 . "</font><br/>";
						$stop=True;
					}
					if (empty($_POST['adr'])){
						$msg1="ERREUR : Adresse non saisi !";
						echo "<font color='red'>" . $msg1 . "</font><br/>";
						$stop=True;
					}
					if (empty($_POST['Genre'])){
						$msg1="ERREUR : Genre non saisi !";
						echo "<font color='red'>" . $msg1 . "</font><br/>";
						$stop=True;
					}
					if(empty($_POST['Civilité'])){
						$msg1="ERREUR : Civilité non saisi !";
						echo "<font color='red'>" . $msg1 . "</font><br/>";
						$stop=True;
					}
		
					if ($stop){
						echo "<a HREF='index.html'>Retour vers le formulaire</a>";
						stop();
					}
				?>
			</td>
		</tr>
		<tr>
			<td align="center">
				<p >Merci d'avoir rempli le formulaire
				<strong> 
				<?php
					echo "<font color='blue'>" . $_POST['lastName'] . "</font>"; 
				?>
				</strong> !</p>
			</td>
		</tr>
		<tr>
			<td>
				<table width="100%" cellspacing="5px" style="border: 3px solid red;">
					<!-- Le Nom -->
					<tr height="35px">
						<td width="30%">
							<label for="nom">Nom</label>
						</td>
						<td width="10%">
							<label for="nom"> : </label>
						</td>
						<td width="60%">
							<p>
						    	<strong> 
							    	<?php
							    		echo "<font color='blue'>" . $_POST['lastName'] . "</font>"; 	  
							    	?>
						    	</strong>
					    	</p>
						</td>
					</tr>
					<!-- Le Prénom -->
					<tr height="35px">
						<td width="30%">
							<label for="nom">Prénom</label>
						</td>
						<td width="10%">
							<label for="nom"> : </label>
						</td>
						<td width="60%">
							<p>
						    	<strong> 
							    	<?php
							    		echo "<font color='blue'>" . $_POST['fisrtName'] . "</font>";  
							    	?>
						    	</strong>
					    	</p>
						</td>
					</tr>
					<!-- La Date de naissance -->
					<tr height="35px">
						<td width="30%">
							<label for="nom">Date de naissance</label>
						</td>
						<td width="10%">
							<label for="nom"> : </label>
						</td>
						<td width="60%">
							<p>
						    	<strong> 
							    	<?php
							    		echo "<font color='blue'>" . $_POST['DayOfBirthday'] . "</font>";  
							    	?>
						    	</strong>
					    	</p>
						</td>
					</tr>
					<!-- Le N de téléphone  -->
					<tr height="35px">
						<td width="30%">
							<label for="nom">N de téléphone </label>
						</td>
						<td width="10%">
							<label for="nom"> : </label>
						</td>
						<td width="60%">
							<p>
						    	<strong> 
							    	<?php
							    		echo "<font color='blue'>" . $_POST['NofPhone'] . "</font>"; 
							    	?>
						    	</strong>
					    	</p>
						</td>
					</tr>
					<!-- Email  -->
					<tr height="35px">
						<td width="30%">
							<label for="nom">Email </label>
						</td>
						<td width="10%">
							<label for="nom"> : </label>
						</td>
						<td width="60%">
							<p>
						    	<strong> 
							    	<?php
							    		echo "<font color='blue'>" . $_POST['Mail'] . "</font>"; 
							    	?>
						    	</strong>
					    	</p>
						</td>
					</tr>
					<!-- Adresse  -->
					<tr height="35px">
						<td width="30%">
							<label for="nom">Adresse </label>
						</td>
						<td width="10%">
							<label for="nom"> : </label>
						</td>
						<td width="60%">
							<p>
						    	<strong> 
							    	<?php
							    		echo "<font color='blue'>" . $_POST['adr'] . "</font>"; 
							    	?>
						    	</strong>
					    	</p>
						</td>
					</tr>
					<!-- Genre  -->
					<tr height="35px">
						<td width="30%">
							<label for="nom">Genre </label>
						</td>
						<td width="10%">
							<label for="nom"> : </label>
						</td>
						<td width="60%">
							<p>
						    	<strong> 
							    	<?php
							    		echo "<font color='blue'>" . $_POST['Genre'] . "</font>"; 
							    	?>
						    	</strong>
					    	</p>
						</td>
					</tr>
					<!-- Civilité  -->
					<tr height="35px">
						<td width="30%">
							<label for="nom">Civilité </label>
						</td>
						<td width="10%">
							<label for="nom"> : </label>
						</td>
						<td width="60%">
							<p>
						    	<strong> 
							    	<?php
							    		echo "<font color='blue'>" . $_POST['Civilité'] . "</font>";
							    	?>
						    	</strong>
					    	</p>
						</td>
					</tr>
					<!-- Les langages maitrisées  -->
					<tr height="35px">
						<td width="30%">
							<label for="nom">Les langages maitrisées </label>
						</td>
						<td width="10%">
							<label for="nom"> : </label>
						</td>
						<td width="60%">
							<p>
						    	<strong> 
							    	<?php 
							    		if(empty($_POST['groupe'])){
							    			echo "<font color='blue'>Aucune.</font>";
							    		}else{
							    			$values = $_POST['groupe'];
							    			$length = count($values);
							    			$i=0;
							    			foreach ($values as $selectedOption){
							    				$i=$i+1;
							    				if ($i==$length){
							    					echo "<font color='blue'>" . $selectedOption . ".</font>";
							    				}else{
							    					echo "<font color='blue'>" . $selectedOption . ", </font>";
							    				}
							    			    
							    			}
							    		}
							    		
							    	?>
						    	</strong>
					    	</p>
						</td>
					</tr>
					<!-- Centres d'intérets  -->
					<tr height="35px">
						<td width="30%">
							<label for="nom"> Centres d'intérets </label>
						</td>
						<td width="10%">
							<label for="nom"> : </label>
						</td>
						<td width="60%">
							<p>
						    	<strong> 
							    	<?php 
							    		if(empty($_POST['check_list'])){
							    			echo "<font color='blue'>Aucune.</font>";
							    		}else{
							    			$values = $_POST['check_list'];
							    			$length = count($values);
							    			$i=0;
							    			foreach ($values as $selectedOption){
							    				$i=$i+1;
							    				if ($i==$length){
							    					echo "<font color='blue'>" . $selectedOption . ".</font>";
							    				}else{
							    					echo "<font color='blue'>" . $selectedOption . ", </font>";
							    				}
							    			    
							    			}
							    		}
							    	?>
						    	</strong>
					    	</p>
						</td>
					</tr>
				</table>	
			</td>
		</tr> 
		</tr> 
	</table>
</body>
</html>