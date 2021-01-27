<?php
	require '../connection/connect.php';

	$db = connect("products");

	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id = null;
	}

	$query = "SELECT 
                    products.id as id,
                    products.price as price,
                    products.image as photo,
                    products.description as description,
                    categories.name as category
              FROM products, categories 
              WHERE products.category_id = categories.id 
              AND products.id=".$id;

	$req = $db->prepare($query);
	$req->execute();
	$data = $req->fetchObject();

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

	<title>Show Detail Article</title>
</head>
<body>
<div class="container">
	<section>
		<h2>Details' Products</h2>
		<hr><br>
		<div class="row">
			<div class="col-8">
				<form action="modifyProduct.php" method="GET">
					<div class="card">
						<div class="card-body">
							<p class="card-text">Description : <?php echo $data->description;  ?></p>
							<p class="card-text">Price : <?php echo $data->price;  ?></p>
							<p class="card-text">Category : <?php echo $data->category;  ?></p>
						</div>
					</div>
			</div>
			<div class="col-4">
				<img src="<?php echo $data->photo;  ?>" class="card-img-top" style="width: 220px;" alt="">
			</div>
		</div>
		<br>
		<div>
			<a href="products.php"><button type="button" class="btn btn-danger">Retour</button></a>
		</div>
</div>
</form>
</section>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

