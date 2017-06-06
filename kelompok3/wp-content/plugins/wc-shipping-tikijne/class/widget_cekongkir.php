<?php
include_once($plugin_dir.'/includes/query.php');
class EpekenWidgetCekongkir extends WP_Widget {
	function __construct () {
		parent::__construct(
			'EpekenWidgetCekongkir', __('Epeken Widget Cek Ongkir','wpb_widget_domain'),
			array('description' => __('Taruh widget ini di sidebar atau footer untuk query ongkos kirim','wpb_widget_domain'))
		);
	}
	/* Front End */
	public function widget($args, $instance) {
		$title = apply_filters( 'widget_title', $instance['title'] );	
		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];
		//Tampikan tampian utama d widget cek ongkir ini.
		$this -> print_cek_ongkir_form();
		echo $args['after_widget'];

	}


	public function print_cek_ongkir_form () {
		?>
			<div data-theme="light" id="rajaongkir-widget"></div>
			<script type="text/javascript" src="//rajaongkir.com/script/widget.js"></script>
		<?php   
	}

	/* Back End */
	public function form($instance) {
		
		if (isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		} else {
			$title = __( 'New title', 'wpb_widget_domain' );
		}
		// Widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php

	}
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}

} // End Widget Class

// Register and load the widget
function wpb_load_widget_epeken_cekongkir() {
    register_widget( 'EpekenWidgetCekongkir' );
}
add_action( 'widgets_init', 'wpb_load_widget_epeken_cekongkir' );


?>
