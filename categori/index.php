
<?php 

	include "../app/categoryController.php";

	$categoryController = new CategoryController();

	// $categories = $categoryController->get();

	// echo json_encode($categories);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style type="text/css">
		
		th{

			border: 1px solid black;
		}


	</style>
	<title>categorias</title>
</head>
<body>
	<div>
		
		<h1>Categorias</h1>
			<table>
				<thead>
					<th>
						#
					</th>
					<th>
						Name
					</th>
					<th>
						descripcion
					</th>
				</thead>
			</table>

			<form action="../app/categoryController.php" method="POST">
            <fieldset>

                <legend>
                    Add new Category
                </legend>

                <label>
                    Name
                </label>
                <input type="text"  name="name" placeholder="terror" required=""> 
                <br>

                <label>
                    Description
                </label>
                <textarea placeholder="write here" name="description" rows="5" required=""></textarea>
                <br>

                <label>
                    Status
                </label>
                <select name="status">
                    <option> active </option>
                    <option> inactive </option>
                </select>
                <br>

                <button type="submit" >Save Category</button>
                <input type="hidden" name="action" value="store">
            </fieldset>
        	</form>
	</div>
</body>
</html>