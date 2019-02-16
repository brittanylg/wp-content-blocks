<?php

namespace brittanylg\WordPress;

class ContentBlocks {

	public static function addShortcode() {
		add_shortcode('content_block', 'brittanylg\WordPress\ContentBlocks::display');
    }
    
    public static function display($args) {
        $defaults = array(
            'id' => '',
            'view' => 'content-block'
        );
        
        $options = shortcode_atts($defaults, $args);
        
        $view = locate_template('views/'.$options['view'].'.php');

        $block = get_post($options['id']);
        $block->title = $block->post_title;
        $block->content = apply_filters('the_content', $block->post_content);
        
        if(!$view) return '';
        
        ob_start();
        
        include($view);
        
        return ob_get_clean();
	}

}
