<?php
	include "../app/categoryController.php";
	$categoryController = new CategoryController();

	$categories = $categoryController->get();

	#echo json_encode($categories);
?>

<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE>
			SITE
		</TITLE>
		<style type="text/css">
			table, th, td{
				border: 1px solid black;
				border-collapse: collapse;
			}

			#updateForm{
				display: none;
			}
		</style>
	</HEAD>
	<BODY>
		<div>
			<h1>
				Categories
			</h1>

			
			<?php if (isset($_SESSION) && isset($_SESSION['error']) ): ?> 
				<h3>
					Error: <?=$_SESSION['error'] ?>
				</h3>
			<?php unset($_SESSION['error']); ?>
			<?php endif?>

			<?php if (isset($_SESSION) && isset($_SESSION['success']) ): ?> 
				<h3>
					Error: <?=$_SESSION['success'] ?>
				</h3>
			<?php unset($_SESSION['success']); ?>
			<?php endif?>
			

			<table>
				<thead>
					<th>
						#
					</th>
					<th>
						name
					</th>
					<th>
						description
					</th>
				</thead>
				<tbody>

					<?php foreach ($categories as $category): ?>

								<tr>
									
									<td>
										<?= $category['id'] ?>
									</td>
									<td>
										<?= $category['name'] ?>
									</td>
									<td>
										<?= $category['description'] ?>
									</td>
									<td><button onclick="edit(<?= $category['id'] ?>,'<?= $category['name'] ?>',
									'<?= $category['description'] ?>', '<?= $category['status'] ?>')">edit</button>
									</td>
									<td>
										<button onclick="remove(<?= $category['id'] ?>)" style="background-color: red; color: white;">
											Delete
										</button>
									</td>

								</tr>
									
					<?php endforeach ?>

					<?php

						/*
						foreach ($categories as $category) {
							echo"<tr>
									<td>
										".$category['id']."
									</td>
									<td>
										".$category['name']."
									</td>
									<td>
										".$category['description']."
									</td>
									<td>
										<button onclick'edit(".$category['id'].",\"".$category['name']."\",\"".$category['description']."\")'>
											Edit category
										</button>
									</td>
							</tr>";

							# code...
						}
						*/
					?>
				</tbody>
			</table>

			<form id="storeForm" action="../app/categoryController.php" method="POST">
				<fieldset>
					<legend>
						add new category
					</legend>

					<label>
						name
					</label>
					<input type="text" name="name" placeholder="terror">
					<br>

					<label>
						description
					</label>
					<textarea name="description" placeholder="write here" rows="5" required=""></textarea>
					<br>

					<label>
						Status
					</label>
					<select name="status" >
						<option> active </option>
						<option> inactive</option>
					</select>
					<br>

					<button type="submit"> save category</button>
					<input type="hidden" name="action" value="store">

				</fieldset>
			</form>

			<form id="updateForm" action="../app/categoryController.php" method="POST">
				<fieldset>
					<legend>
						update category
					</legend>

					<label>
						name
					</label>
					<input type="text" name="name" id="name" placeholder="terror">
					<br>

					<label>
						description
					</label>
					<textarea name="description" id="description" placeholder="write here" rows="5" required=""></textarea>
					<br>

					<label>
						Status
					</label>
					<select name="status" id="status">
						<option> active </option>
						<option> inactive</option>
					</select>
					<br>

					<button type="submit"> save category</button>
					<input type="hidden" name="action" value="update">
					<input type="hidden" name="id" id="id">

				</fieldset>
			</form>

			<form id="destroyForm" action="../app/categoryController.php" method="POST">
				<input type="hidden" name="action" value="destroy">
				<input type="hidden" name="id" id="id_destroy">
			</form>

		</div>
		<script type="text/javascript">
			function edit(id,name,description,status){
				document.getElementById('storeForm').style.display="none";
				document.getElementById('updateForm').style.display="block";

				document.getElementById('name').value = name
				document.getElementById('description').value = description
				document.getElementById('status').value = status
				document.getElementById('id').value = id

				/*
				alert(name)
				alert(description)
				alert("hola: "+id)
				*/
			}

			function remove(id){
				var confirm = prompt("si quiere eliminar el registro; escriba :"+id);
				if (confirm == id) {
					
					document.getElementById('id_destroy').value = id;
					document.getElementById('destroyForm').submit();
				}
			}
		</script>
	</BODY>
</HTML>