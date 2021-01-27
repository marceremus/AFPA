<?php

/**
 * Class Afpa_Widget
 */
class Afpa_Widget extends WP_Widget {

	public function __construct() {
		parent::__construct("afpa_widget",
			"Afpa widget",
			array('description' => "Affiche le produit ")
		);
	}

	/* function principale du widget */
	public function widget($args, $instance) {
		//parent::widget( $args, $instance );
		echo 'Widget Afpa works';
	}

}

function afpa_run_widget() {
	register_widget("afpa_widget");
}

add_action('widgets_init', 'afpa_run_widget');
