<!document html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Ejercicio 1</title>
	</head>
	<body>
		<?php 
			$numero1=20;
			$numero2=15;
		
			echo "La variable $numero1 contiene el valor $numero1 <br/>";
			echo "La variable $numero2 contiene el valor $numero2 <br/>";

		?>
		<table border=2; style="text-align:center;">
			<tr>
				<td>Operacion</td>
				<td>Resultado</td>
			</tr>
			<tr>
				<td><?php echo "$numero1+$numero2";?></td>
				<td><?=$numero1+$numero2?></td>
			</tr>
			<tr>
				<td><?php echo "$numero1-$numero2";?></td>
				<td><?=$numero1-$numero2?></td>
			</tr>
			<tr>
				<td><?php echo "$numero1*$numero2";?></td>
				<td><?=$numero1*$numero2?></td>
			</tr>
			<tr>
				<td><?php echo "$numero1/$numero2";?></td>
				<td><?=$numero1/$numero2?></td>
			</tr>
		</table>
	</body>
</html>