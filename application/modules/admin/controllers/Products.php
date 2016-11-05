<?php

class Products extends Admin_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "products_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "products_create";
        $this->load->view($this->_container, $data);
    }

        public function edit($id) {
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "products_edit";
        $this->load->view($this->_container, $data);
    }
}
