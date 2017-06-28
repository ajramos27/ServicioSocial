<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller {

    function __construct() {
      parent::__construct();

      $this->load->library(array('ion_auth'));

      //Si no esta logeado redirecciona a auth
      if (!$this->ion_auth->logged_in()) {
          redirect('/auth', 'refresh');
      }
    }

    //Index
    public function index() {
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "admin/home";
        $this->load->view($this->_container, $data);
    }

    public function change_password() {

      if ($this->input->post('password')) {
          $data['password'] = $this->input->post('password');
          $this->ion_auth->update($this->logged_in_id, $data);
          redirect('/admin/index', 'refresh');
      }
      $data['user'] = $this->ion_auth->user($this->logged_in_id)->row();
      $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "change_password";
      $this->load->view($this->_container, $data);

    }

}
