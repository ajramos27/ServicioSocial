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

    public function sendEmail(){


      $this->load->library('email');


      // Set to, from, message, etc.
      $this->email->from('aj.ramos2794@gmail.com', 'Aaron Ramos');
      $this->email->to('aaronchi_13@hotmail.com');
      $this->email->subject('Email Test');
      $this->email->message('Testing the email class.');
      $this->email->set_newline("\r\n");
      if ($this->email->send()) {
        echo 'Your email was sent, thanks chamil.';
      } else {
        show_error($this->email->print_debugger());
      }

    }

}
