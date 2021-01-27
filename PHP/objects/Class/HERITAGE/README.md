## Héritage



	class Product {

		private $name;
		private $price;
		private $type;

		public function __construct(string $name,float $price, string $type = null) {
			$this->name = $name;
			$this->price = $price;
			$this->type = $type;
		}

		/**
		 * @return string
		 */
		public function getName() :string {
			return $this->name;
		}

		/**
		 * @param string $name
		 */
		public function setName(string $name ) {
			$this->name = $name;
		}

		/**
		 * @return float
		 */
		public function getPrice() :float {
			return $this->price;
		}

		/**
		 * @param float $price
		 */
		public function setPrice(float $price ) {
			$this->price = $price;
		}

		/**
		 * @return string
		 */
		public function getType(): string {
			return $this->type;
		}

		/**
		 * @param string $type
		 */
		public function setType( string $type ): void {
			$this->type = $type;
		}

	}

	class Book extends Product {

		public function __construct( string $name, float $price) {
			parent::__construct( $name, $price, "Book");
		}

		function printTitle() :string{
			return 'titre de book';
		}
	}

	$book = new Product("book", 10.10, "book");
	$book2 = new Book("Book2", 29.90);

	var_dump($book2->printTitle());
	echo '<br>';
	var_dump($book2);
	
