<?php
// Register and load the widget
function wpb_load_widget() {
    register_widget( 'multline_title_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );

// Creating the widget 
class multline_title_widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'multline_title_widget', 
            __('Multiline Title Text Widget', 'bs'), 
            array( 'description' => __( 'The text widget with the option for multiple lines in the heading.', 'bs' ), ) 
        );
    }

    public function widget( $args, $instance ) {
        $title = put_title_in_spans( $instance['title'] );
        $content = wpautop($instance['content']);
        $buttons = $instance['buttons'];
        echo $args['before_widget'];
        echo $args['before_title'] . $title . $args['after_title'];
            echo $content;
        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $subtitle = '';
        if ( isset( $instance[ 'subtitle' ] ) )
            $subtitle = $instance[ 'subtitle' ];

        $title = '';
        if ( isset( $instance[ 'title' ] ) )
            $title = $instance[ 'title' ];

        $content = '';
        if ( isset( $instance[ 'content' ] ) )
            $content = $instance[ 'content' ];

        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'erikvera' ); ?></label>
            <textarea rows="2" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"><?php echo esc_attr( $title ); ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'content' ); ?>"><?php _e( 'Text:', 'erikvera' ); ?></label>
            <textarea rows="6" class="widefat" id="<?php echo $this->get_field_id( 'content' ); ?>" name="<?php echo $this->get_field_name( 'content' ); ?>"><?php echo $content; ?></textarea>
        </p>

    <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['content'] = ( ! empty( $new_instance['content'] ) ) ? strip_tags( $new_instance['content'] ) : '';
        return $instance;
    }
}