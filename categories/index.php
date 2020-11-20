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
			
		</style>
	</HEAD>
	<BODY>
		<div>
			<h1>
				Categories
			</h1>
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
					<?php

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
							</tr>";

							# code...
						}
					?>
				</tbody>
			</table>

			<form action="../app/categoryController.php" method="POST">
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
					<select name="status">
						<option> active </option>
						<option> inactive</option>
					</select>
					<br>

					<button type="submit"> save category</button>
					<input type="hidden" name="action" value="store">

				</fieldset>
			</form>
		</div>
	</BODY>
</HTML>