<?php

class Cp extends CI_Controller {

    public $data = array();

    function __construct() {
        parent::__construct();
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
    }

    function index() {
        $args = array(
            'posts_per_page' => 5,
            'offset' => 1,
                //'category' => 0
        );

        $this->data['posts'] = get_posts($args);


        $this->load->view("common/header");
        $this->load->view("cp/index", $this->data);
        $this->load->view("common/footer");
    }

    function create_new_product() {
        $this->load->view("common/header");
        $this->load->view("cp/index", $this->data);
        $this->load->view("common/footer");
    }

    function edit_product($post_ID = 0) {
        
    }

}
