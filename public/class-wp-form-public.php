<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://profiles.wordpress.org/noruzzaman/
 * @since      1.0.0
 *
 * @package    Wp_Form
 * @subpackage Wp_Form/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Wp_Form
 * @subpackage Wp_Form/public
 * @author     Noruzzaman <noruzzamanrubel@gmail.com>
 */
class Wp_Form_Public {

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of the plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct( $plugin_name, $version ) {

        $this->plugin_name = $plugin_name;
        $this->version     = $version;

    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Wp_Form_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Wp_Form_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-form-public.css', array(), $this->version, 'all' );

    }

    /**
     * Register the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Wp_Form_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Wp_Form_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-form-public.js', array( 'jquery' ), $this->version, false );
        wp_enqueue_script( 'jquery-validation', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js' );

        wp_localize_script( $this->plugin_name, 'wp_form', [
            'ajaxurl'     => admin_url( 'admin-ajax.php' ),
            'action'      => 'wp_form_submit',
            'nonce'       => wp_create_nonce( 'wp_form_nonce' ),
            'fname'       => __( 'Please enter your first name', 'wp-form' ),
            'fname_min'   => __( 'Please enter at least 2 characters', 'wp-form' ),
            'lname'       => __( 'Please enter your last name', 'wp-form' ),
            'lname_min'   => __( 'Please enter at least 2 characters', 'wp-form' ),
            'email'       => __( 'Please enter your email', 'wp-form' ),
            'email_valid' => __( 'Your email address must be in the format of name@domain.com', 'wp-form' ),
            'subject'     => __( 'Please enter your subject', 'wp-form' ),
            'message'     => __( 'Please enter your message', 'wp-form' ),
        ] );

    }

}
