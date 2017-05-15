<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title> 
			TABUADA 
		</title>
		<link rel="shortcut icon" href="http://icon-icons.com/icons2/562/PNG/512/calculator_icon-icons.com_54044.png"/>
		<style>
			body {
				max-width: 75%;
				margin: 0 auto;
				font-family: Calibri;
				text-align: center;
			}
			tr,th {
				text-align: center;
			}
			th {
				color: white;
				background-color: red;
			}
			table {
				margin-right: 35px;
				margin-bottom: 15px;
			}
		</style>
	</head>
	<body>
		<br>
		<?php
			foreach ($_POST as $chave => $valor)
				$$chave = $valor;
		?>
		<?php
		while ($num_inicialtab <= $num_finaltab)
		{
			echo 
				"<table border='1' style= 'display:inline-table'>
					<caption>
						<b>
							TABUADA DO $num_inicialtab
						</b>
					</caption>
					<tr>
						<th>
							&nbsp; FÓRMULA &nbsp;
						</th>
						<th>
							&nbsp; VALOR &nbsp;
						</th>
					</tr>
					";
					
		$num_inicialmult = $_POST ['num_inicialmult'];
		$num_finalmult = $_POST ['num_finalmult'];
		
		while ($num_inicialmult <= $num_finalmult)
		{
			echo 
					"<tr>
						<td>
							$num_inicialtab x $num_inicialmult
						</td>
						";
			echo		
						"<td>".
							$num_inicialtab * $num_inicialmult
						."</td>
					</tr>
					";
		$num_inicialmult++;
		}
		$num_inicialtab++;
			echo 
				"</table>
				";
		}
		?>
	</body>
</html>