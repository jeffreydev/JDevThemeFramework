<?php

class JDev_Shortcodes {
    
    public function __construct() {
        add_shortcode('one_third', array($this, 'jdev_one_third'));
        add_shortcode('two_third', array($this, 'jdev_two_third'));
    }
    
    /**
     * One Third Div for Twitter Bootstrap
     * 
     * @param type $atts
     * @param type $content
     * @return type
     */
    public function jdev_one_third( $atts, $content = null ){
        return '<div class="col-lg-4">'.do_shortcode($content).'</div>';
    }
}



//function linkbutton_function( $atts, $content = null ) {
//   return '<button type="button">'.do_shortcode($content).'</button>';
//}
//add_shortcode('linkbutton', 'linkbutton_function');
//
//
//function one_third_function( $atts, $content = null ) {
//   return '<div class="col-lg-4">'.do_shortcode($content).'</div>';
//}
//add_shortcode('one_third', 'one_third_function');
//
//
//function two_third_function( $atts, $content = null ) {
//   return '<div class="col-lg-8">'.do_shortcode($content).'</div>';
//}
//add_shortcode('two_third', 'two_third_function');
//
//
//function one_half_function( $atts, $content = null ) {
//   return '<div class="col-lg-6">'.do_shortcode($content).'</div>';
//}
//add_shortcode('one_half', 'one_half_function');
//
//function row_function( $atts, $content = null ) {
//   return '<div class="row">'.do_shortcode($content).'</div>';
//}
//add_shortcode('row', 'row_function');