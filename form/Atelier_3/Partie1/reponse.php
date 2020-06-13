<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<table align="center" width="800px" style="border: 3px solid green;">
		<tr>
			<td align="center">
				<p >Merci d'avoir rempli le formulaire
				<strong> 
				<?php 
					echo $_POST['lastName'];
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
							    		echo $_POST['lastName'];
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
							    		echo $_POST['fisrtName'];
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
							    		echo $_POST['DayOfBirthday'];
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
							    		echo $_POST['NofPhone'];
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
							    		echo $_POST['Mail'];
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
							    		echo $_POST['adr'];
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
							    		echo $_POST['Genre'];
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
							    		echo $_POST['Civilité'];
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
							    		$values = $_POST['groupe'];
							    		$length = count($values);
							    		$i=0;
							    		foreach ($values as $selectedOption){
							    			$i=$i+1;
							    			if ($i==$length){
							    				echo $selectedOption.".";
							    			}else{
							    				echo $selectedOption.", ";
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
							    		$values = $_POST['check_list'];
							    		$length = count($values);
							    		$i=0;
							    		foreach ($values as $selectedOption){
							    			$i=$i+1;
							    			if ($i==$length){
							    				echo $selectedOption.".";
							    			}else{
							    				echo $selectedOption.", ";
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