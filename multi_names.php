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
			
				function utf8_for_xml($string){
    				return preg_replace('/[^\x{0009}\x{000a}\x{000d}\x{0020}-\x{D7FF}\x{E000}-\x{FFFD}]+/u',
           				' ', $string);
				}
			
			
				@ $db = mysqli_connect('localhost', 'names_user', 'pass123', 'dq4');
				
				if(mysqli_connect_errno() ) {
					echo "Error: could not connect to database. Please try again later.";
					exit;
				}
					
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
							/*$row["name_en"]*/ utf8_for_xml("పాల్ Schilmoeller") . "</td><td>" . $row["name_te"] . "</td><td>" . $row["name_hi"] . 
						"</td></tr>"; 
				}
				
				echo "</table>";
		
				mysqli_free_result($result);
			    mysqli_close($db);	     
			?>
	     </div>
</body>
</html>