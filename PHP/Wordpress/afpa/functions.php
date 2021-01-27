<?php
	/**
	 * Afpa functions
	 */

	function getAllProducts(){
		global $wpdb;
		$produits = $wpdb->get_results("SELECT * FROM wp_products");
		?>
        <section>
            <div id="listeProduit">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
						<?php
							foreach ($produits as $product){
						?>
                        <td class="listeProduit"><?php echo $product->id; ?></td>
                        <td  class="listeProduit"><?php echo $product->name; ?></td>
                        <td  class="listeProduit"><?php echo $product->description; ?></td>
                        <td>
                            <img src="<?php echo get_template_directory_uri().'/img/'.$product->image; ?>" alt="image produit"></td>
                    </tr>
					<?php
						}
					?>
                    </tbody>
                </table>
            </div>
        </section>
		<?php
	}

	function getAllCategories() {
		global $wpdb;
		return $wpdb->get_results( "SELECT * FROM wp_categories" );
	}

	function afpaMenu(){

		$menu =  wp_nav_menu(array(
			'container'       => 'div',
			'container_class' => 'collapse navbar-collapse',
			'container_id'    => 'bs-example-navbar-collapse-1',
			'format'           => "ul",
			'menu_class'      => 'navbar-nav mr-auto',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => '',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'item_spacing'    => 'preserve',
			'depth'           => 0,
			'walker'          => '',
			'theme_location'  => '',
		));
		return $menu;
	}

	function getVille(){
		global $wpdb;
		return $wpdb->get_results("SELECT * FROM ville");
	}

	function getVilleByNomVille($nomVille){
		global $wpdb;
		return $wpdb->get_results("SELECT * FROM ville WHERE nom_ville= ".$nomVille);
	}

	function redirectToTarif(){
		return home_url( '/tarif' );
	}
	add_filter( 'registration_redirect', 'redirectToTarif' );

	function textBox(){
	    ?>
		<!-- Footer -->
<div class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-lg-2 col-md-12 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(78).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(79).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-12 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(81).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(82).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(84).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
</div>

<?php
    }

    function slider(){
	    ?>
	    <div id="carouselExampleControls" class="carousel slide mt-5" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://picsum.photos/id/249/1100/360" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://picsum.photos/id/299/1100/360" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://picsum.photos/id/376/1100/360" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php
    }


