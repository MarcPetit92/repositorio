<html>
		<head>
				<title>
				
				Página de Inicio
				</title>
		
		</head>

		<body>
		<table border>
		<tr>
		<?php
		
		$contador=1;
		
		while ($contador<=100)
		{
			$divisible = $contador%10;
			//echo "$divisible";
			
			
				if ($divisible == 0)
				{
					echo "<td> $contador</td> ";
					echo "</tr> <tr>";
				}
				else
				{
					echo "<td> $contador </td>";
				}
			
			//$parimpar = $contador%2;			
			//echo "." . $parimpar . ".";
			
			//if ($parimpar == 0)
			//{
				//echo"<b><td> $contador</td> </b>";				
			//}				
			//else	
			//{
				//echo"<i><td> $contador </i></td>"; 
			//}				
			$contador++;
			
			
		}
				
		?>
		
		</table>
		</body>
</html>