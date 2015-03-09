<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();

    }

    public function index() {
        ?>
        <ul>
            <?php
            $args = array('posts_per_page' => 5, 'offset' => 1, 'category' => 0);

            $myposts = get_posts($args);
            foreach ($myposts as $post) {
                print_r($post);
            }
            ?>

        </ul>
        <?php
        die();

        $args = array(
            'orderby' => 'name',
            'hierarchical' => 1,
            'parent' => 144
        );

        $categories = get_categories($args);

        foreach ($categories as $category) {
//print_r($category);
            echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '「' . $category->term_id . '」</a><br/>';
        }

//wp_create_category('',0);


        print_r(get_the_category_list('|', 0));
        /*
          'type'                     => 'post',
          'child_of'                 => 0,
          'parent'                   => '',
          'orderby'                  => 'name',
          'order'                    => 'ASC',
          'hide_empty'               => 1,
          'hierarchical'             => 1,
          'exclude'                  => '',
          'include'                  => '',
          'number'                   => '',
          'taxonomy'                 => 'category',
          'pad_counts'               => false */
    }

}
