<?php
	$name = "jordy";
	$lastName = "Segoviano";
	$FullName = $name." ".$lastName;
?>

<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE>
			SITE
		</TITLE>
	</HEAD>
	<BODY>
		<h1>
			hola mi nombre es <?= $FullName; ?>
		</h1>
		<div>
			<fieldset>
				<form method="POST" action="app/test.php">
					<legend>
						Formulario
					</legend>

					<div>
						<label>
							numero 1
						</label>
						<input type="text" name="num1">
					</div>
					<div>
						<label>
							numero 2
						</label>
						<input type="text" name="num2">
					</div>

					<div>
						<label>
							Metodo
						</label>
						<br>

						<select name="metodo">
							<option value="suma">
								Suma
							</option>

							<option value="res">
								Resta
							</option>
							<option value="multi">
								Multiplicacion
							</option>

							<option value="divi">
								Divicion
							</option>
						</select>
					</div>

					<button type="submit" class="btn">
						Realizar operacion
					</button>
				</form>
			</fieldset>
		</div>
	</BODY>
</HTML>