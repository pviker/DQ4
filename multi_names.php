<!DOCTYPE html>

<html lang="en">
	
<head>
	
	<title>ICS325 DQ4 - Multi Names</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="styles/queryresults.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	
</head>


<body>
	        

		<div class="CSSTableGenerator">
				<h1>Welcome to Team Dolphins!</h1>
			<?php
			
				/* UNCOMMENT FOR LOCAL DB CREDENTIALS */
				// $dbUser = "names_user";			
				// $dbPass = "pass123";				
				// $db = "dq4";			
			
				/* UNCOMMENT FOR SERVER DB CREDENTIALS */
				$dbUser = "ics325fa1528";		
				$dbPass = "983278";				
				$db = "ics325fa1528";	
			
				@ $db = mysqli_connect('localhost', $dbUser, $dbPass, $db);
				
				if(mysqli_connect_errno() ) {
					echo "Error: could not connect to database. Please try again later.";
					exit;
				}
				
				/* change character set to utf8 */
				mysqli_set_charset($db, "utf8");
					
				$query = "select name_en, name_te, name_hi from names";
				$result = mysqli_query($db, $query);
				
				echo "<table id='center'>
				     	<tr>
				     		<th class='colheaders'>English</th>
				     		<th class='colheaders'>Telugu</th>
				     		<th class='colheaders''>Hindi</th>
				     	</tr>";
						
				while($row = mysqli_fetch_assoc($result)) {
					echo 
						"<tr><td>" . 
							$row["name_en"] . "</td><td>" . $row["name_te"] . "</td><td>" . $row["name_hi"] . 
						"</td></tr>"; 
				}
				
				echo "</table>";	
		
				mysqli_free_result($result);
			    mysqli_close($db);	     
			?>
	     </div>
</body>
</html>