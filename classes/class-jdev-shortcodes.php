<?php

class JDev_Shortcodes {
    
    public function __construct() {
        add_shortcode('one_third', array($this, 'jdev_one_third'));
        add_shortcode('two_third', array($this, 'jdev_two_third'));
        add_shortcode('one_half', array($this, 'jdev_one_half'));
        add_shortcode('row', array($this, 'jdev_row'));
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
    
    
    
    /**
     * Two Third Div for Twitter Bootstrap
     * 
     * @param type $atts
     * @param type $content
     * @return type
     */
    public function jdev_two_third( $atts, $content = null ){
        return '<div class="col-lg-8">'.do_shortcode($content).'</div>';
    }
    
    
    
    /**
     * One Half Div for Twitter Bootstrap
     * 
     * @param type $atts
     * @param type $content
     * @return type
     */
    public function jdev_one_half( $atts, $content = null ){
        return '<div class="col-lg-6">'.do_shortcode($content).'</div>';
    }
    
    
    
    /**
     * Row Div for Twitter Bootstrap
     * 
     * @param type $atts
     * @param type $content
     * @return type
     */
    public function jdev_row( $atts, $content = null ){
        return '<div class="row">'.do_shortcode($content).'</div>';
    }
}

new JDev_Shortcodes();