<?php
	require_once '../connection/connect.php';

	$db = connect("products");

	if(isset($_GET['id'])){
		$id = $_GET['id'];
	} else {
		$id = null;
	}

	if(isset($_GET['description'])){
		$description = $_GET['description'];
	} else {
		$description = null;
	}

	if(isset($_GET['price'])){
		$price = $_GET['price'];
	} else {
		$price = null;
	}

	if(isset($_GET['categorie'])){
		$categories = $_GET['categorie'];
	} else {
		$categories = null;
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

	$reqCat = $db->prepare("SELECT * FROM categories");
	$reqCat->execute();
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

    <title>Modify your Article</title>
</head>
<body>
<div class="container">
    <section>
        <h2>Modify Your Products</h2>
        <hr><br>
        <form action="updateProduct.php" method="GET">
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" name="id" class="d-none" value="<?php echo $data->id; ?>"><?php echo $data->id; ?>
            </div>

            <div class="form-group">
                <label for="description">Product's description </label>
                <input type="text" name="description" class="form-control" id="<?php echo $data->id; ?>" value="<?php echo $data->description; ?>">
            </div>

            <div class="form-group">
                <label for="price">Product's price</label>
                <input type="text" name="price" class="form-control" id="<?php echo $data->id; ?>" value="<?php echo $data->price; ?>">
            </div>

            <div class="form-group">
                <label for="categories">Product's categories</label>
                <select class="form-control" id="categories" name="categories">
					<?php
						$text = "";
						$option = "<option";
						$selected = " selected >";

						while($response = $reqCat->fetch()) {
							$text = $option.' value=';
							if($response['name'] == $data->category){
								$text .= $response['name'].$selected;
							}else{
								$text .= $response['name'].'>';
							}
							echo $text.= $response['name'].'</option>';
						}
					?>
                </select>
            </div>

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
