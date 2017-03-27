<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
// ---------------------------------------------------------------------------

/**
 * Admin_Controller
 *
 * Extends the Site_Controller class so I can declare special Admin controllers
 *
 * @package       	SCMS
 * @subpackage      Controllers
 */
 class Admin_Controller extends MY_Controller {
     public $is_admin;
     public $logged_in_name;
     public $logged_in_id;

     function __construct() {
         parent::__construct();

         // Set container variable
         $this->_container = $this->config->item('ci_my_admin_template_dir_admin') . "layout.php";
         $this->_modules = $this->config->item('modules_locations');

         $this->load->library(array('ion_auth'));

         if (!$this->ion_auth->logged_in()) {
             redirect('/auth', 'refresh');
         }

         $this->is_admin = $this->ion_auth->is_admin();
         $user = $this->ion_auth->user()->row();
         $this->logged_in_name = $user->first_name;
         $this->logged_in_id = $user->id;
         $this->is_responsable = $this->ion_auth->in_group('Responsable');
         $this->is_prestador = $this->ion_auth->in_group('Prestador');

         log_message('debug', 'CI My Admin : Admin_Controller class loaded');
     }
 }

/* End of Admin_controller.php */
/* Location: ./application/libraries/Admin_controller.php */
