<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class AdminPanel extends AdminPanel_Controller {

    function __construct() {
      parent::__construct();

      $this->load->library(array('ion_auth'));

      if (!$this->ion_auth->logged_in()) {
          redirect('/auth', 'refresh');
      }
    }

    public function index() {
        $data['page'] = $this->config->item('ci_my_admin_template_dir_adminpanel') . "dashboard";
        $this->load->view($this->_container, $data);
    }

}
