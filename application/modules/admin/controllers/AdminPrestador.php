<?php
//Controlador de la seccion de Prestadores
class AdminPrestador extends Admin_Controller {

    function __construct() {
        parent::__construct();

        //Si no esta logeado enviar a auth
        $this->load->library(array('ion_auth'));
        if (!$this->ion_auth->logged_in()) {
            redirect('/auth', 'refresh');
        }

        //Cargar modelos que se utilizan
        $this->load->model(array('admin/proyecto'));
        $this->load->model(array('admin/responsable'));
        $this->load->model(array('admin/dependencia'));
        $this->load->model(array('admin/alumno'));
        $this->load->model(array('admin/formulario'));
    }

    //Index
    public function index() {
      $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "prestador/home";
      $this->load->view($this->_container, $data);
    }
}
