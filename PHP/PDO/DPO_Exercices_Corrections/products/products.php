<?php
	require '../connection/connect.php';

	$db = connect("products");

	$query = "SELECT 
                    products.id as id,
                    products.price as price,
                    products.description as description,
                    categories.name as categorie
              FROM products, categories 
              WHERE products.category_id = categories.id ORDER BY products.id ASC";
	$req = $db->prepare($query);
	$req->execute();
	//$data = ;
	//var_dump($data);
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

    <title>Products</title>
</head>
<body>
<div class="container">
    <h2>Products</h2>

        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>

				<?php
					while($data = $req->fetchObject()){
                ?>
                <td scope="row"><?php echo $data->id; ?></td>
                <td><?php echo $data->description; ?></td>
                <td><?php echo $data->price; ?></td>
                <td><?php echo $data->categorie; ?></td>
                <td>
                    <a href="showDetailsProduct.php?id=<?php echo $data->id; ?>">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-bars" aria-hidden="true"></i> Lire</button>
                    </a>
                    <a href="modifyProduct.php?id=<?php  echo $data->id; ?>"><button class="btn btn-warning" type="submit"><i class="fa fa-spinner" aria-hidden="true"></i> Modifier</button></a>
                    <a href="deleteProduct.php?id=<?php echo $data->id; ?>"><button class="btn btn-danger" type="submit"><i class="fa fa-minus-square" aria-hidden="true"></i> Supprimer</button></a>
                </td>
            </tr>
			<?php
				}
			?>
            </tbody>
        </table>
    </form>
    <a href="showProduct.php"><button type="button" class="btn btn-primary">Ajouter un produit</button></a>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
