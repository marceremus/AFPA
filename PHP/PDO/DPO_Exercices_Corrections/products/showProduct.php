<?php
	require '../connection/connect.php';

	$db = connect("products");

	$req1 = $db->prepare("SELECT * FROM categories");

	$req1->execute();

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <title>Add Your New Article</title>
</head>
<body>
<div class="container">
    <section>
        <h2>Add Your New Article</h2>
        <hr><br>
        <form action="addProduct.php" method="POST">
            <div class="form-group">
                <label for="productName">Products name : </label>
                <input type="text" name="productName" id="productName" class="form-control">
            </div>

            <div class="form-group">
                <label for="description">Product's description </label>
                <input type="text" name="description" id="description" class="form-control">
            </div>

            <div class="form-group">
                <label for="price">Product's price</label>
                <input type="text" name="price" id="price" class="form-control">
            </div>

            <div class="form-group">
                <label for="categories">Product's categories</label>
                <select class="form-control" id="categories" name="categories">
					<?php
						while($data = $req1->fetchObject()){
							echo '<option value="'.$data->name.'">'.$data->name.'</option>';
						}
					?>
                </select>
            </div>
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="image" required>
                <label class="custom-file-label" for="validatedCustomFile">Choisir la photo ...</label>
            </div>
            <br>
            <hr>
            <button type="submit" class="btn btn-success">Valider</button>
            <a href="products.php"><button type="button" class="btn btn-danger">Retour</button></a>
        </form>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

