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
      $user = $this->ion_auth->user()->row();
        $userId = $this->ion_auth->user()->row()->id;
        $alumno = $this->alumno->get_by_userId($userId);
        $proyectos = $this->proyecto->get_all();
        $responsables = $this->responsable->get_all();
        $data['alumno'] = $alumno;
        $data['proyectos'] = $proyectos;
        $data['responsables'] = $responsables;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "prestador/home";
        $this->load->view($this->_usercontainer, $data);
    }

    public function informe() {
        $user = $this->ion_auth->user()->row();
        $userId = $this->ion_auth->user()->row()->id;
        $alumno = $this->alumno->get_by_userId($userId);
        $proyectos = $this->proyecto->get_all();
        $responsables = $this->responsable->get_all();
        $data['alumno'] = $alumno;
        $data['proyectos'] = $proyectos;
        $data['responsables'] = $responsables;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "prestador/informe";
        $this->load->view($this->_usercontainer, $data);
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

    public function viewInfo() {
      $alumno = $this->alumno->get_by_userId($this->logged_in_id);
      $proyecto = $this->proyecto->get($alumno->proyecto_id);
      $responsable = $this->responsable->get($proyecto->responsable_id);
      $dependencia = $this->dependencia->get($responsable->dependencia_id);

      $data['alumno'] = $alumno;
      $data['proyecto'] = $proyecto;
      $data['responsable'] = $responsable;
      $data['dependencia'] = $dependencia;
      $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "prestador/view_info";
      $this->load->view($this->_usercontainer, $data);
    }
}
