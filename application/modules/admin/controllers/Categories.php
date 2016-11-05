<?php

class Categories extends Admin_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "categories_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "categories_create";
        $this->load->view($this->_container, $data);
    }

        public function edit($id) {
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "categories_edit";
        $this->load->view($this->_container, $data);
    }
}
