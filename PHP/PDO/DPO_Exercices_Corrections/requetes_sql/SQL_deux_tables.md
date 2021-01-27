# CRUD en PHP
## Un CRUD signifie
### Create = INSERT
### Read   = SELECT
### Update = UPDATE
### Delete = DELETE

### Base de donnée = products
  
### Read   = SELECT

$req = "SELECT * FROM products";

$req = "SELECT * 
		FROM products, categories 
		WHERE products.category_id = categories.id";

$req = "SELECT * 
		FROM products, categories 
		WHERE products.category_id = categories.id 
		AND categories.name = 'Electronics'";

$req = "SELECT * 
		FROM products, categories 
		WHERE products.category_id = categories.id 
		AND categories.name = 'Electronics' 
		AND products.price > 100";

$req = "SELECT * 
		FROM products, categories 
		WHERE products.category_id = categories.id 
		AND categories.name = 'Electronics' 
		AND products.price > 100 
		AND products.name LIKE '%sony%'";

$req = "SELECT categories.name as nom, products.price as prixHT, products.price*0.2 as TVA, products.price*1.2 as prixTTC  
		FROM products, categories 
		WHERE products.category_id = categories.id 
		AND categories.name = 'Electronics' 
		AND products.price > 100 
		AND products.name LIKE '%sony%'";


$req = "SELECT * 
		FROM products, categories 
		WHERE products.category_id = categories.id 
		AND categories.name = 'Electronics' 
		AND products.price > 100 
		AND DATEDIFF( categories.created, categories.modified ) >= 2";

$req = "SELECT * 
		FROM products, categories 
		WHERE products.category_id = categories.id 
		AND categories.name = 'Electronics' 
		AND products.price > 100 
		AND DATEDIFF( categories.created, categories.modified ) >= 2 
		AND products.price > 300";

$req = "SELECT * 
		FROM products, categories 
		WHERE products.category_id = categories.id 
		AND products.created 
		BETWEEN '2014-11-22 20:20' AND '2019-09-13 20:21' ";

$req = "SELECT * 
		FROM products, categories 
		WHERE products.category_id = categories.id 
		AND products.created > '2014-11-22'";


### Update = UPDATE

$query = "UPDATE products 
	  SET products.category_id = 2 
	  WHERE products.id = 2";

$query = "UPDATE products 
	  SET products.created = NOW() 
	  WHERE products.id = 10";

$query = "UPDATE products 
	 SET products.created = NOW() 
	 WHERE products.category_id = 
	 (SELECT DISTINCT(id) 
	 FROM categories 
	 WHERE categories.name = 'Electronics')";


### Create = INSERT

$insert = "INSERT INTO categories (name, created) 
		VALUES ('Motorola', NOW())";

$insert = "INSERT INTO products (name, description, price, category_id, image, created, modified) 
		VALUES ('Sony Smart Watch','Wal-mart Shirt', 24, 1, 'image.jpeg', NOW(), NOW())";

$insert = "INSERT INTO products (name, description, price, category_id, image, created) 
		VALUES ('Smart Watch','Wal-Shirt', 124, 1, 'image1.jpeg', NOW())";

$insert = "INSERT INTO products (name, description, price, category_id, image, created, modified) 
		VALUES ('Sony Smart Watch','Wal-mart Shirt', 24, (SELECT id FROM categories WHERE categories.name = 	
		'Electronics'), '', NOW(), NOW())";


### Delete = DELETE

$supp = "DELETE FROM categories 
	 WHERE categories.id = 4";

$supp = "DELETE FROM products 
	 WHERE products.category_id = (SELECT id 
	 FROM categories 
	 WHERE categories.name = 'Fashion') 
	 AND products.name = 'Bag'";


