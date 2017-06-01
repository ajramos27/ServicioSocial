<?php

class Informes extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->library(array('ion_auth'));
        if (!$this->ion_auth->logged_in()) {
            redirect('/auth', 'refresh');
        }

        $this->load->model(array('admin/informe'));
        $this->load->model(array('admin/alumno'));
        $this->load->model(array('admin/proyecto'));
        $this->load->model(array('admin/responsable'));
        $this->load->model(array('admin/dependencia'));

    }

    public function index() {
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

    public function create() {
        if ($this->input->post('alumno_id')) {
            $data['alumno_id'] = $this->input->post('alumno_id');
            $data['preg1'] = $this->input->post('preg1');
            $data['preg2'] = $this->input->post('preg2');
            $data['preg3'] = $this->input->post('preg3');
            $data['preg4'] = $this->input->post('preg4');
            $data['preg5'] = $this->input->post('preg5');
            $data['preg6'] = $this->input->post('preg6');
            $data['preg7'] = $this->input->post('preg7');
            $data['preg8'] = $this->input->post('preg8');
            $data['preg9'] = $this->input->post('preg9');
            $data['actividades'] = $this->input->post('actividades');
            $data['experiencia'] = $this->input->post('experiencia');
            $data['observaciones'] = $this->input->post('observaciones');

            $this->informe->insert($data);

            redirect('/admin/adminprestador/', 'refresh');

        }

        //$data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "formularios_create";
        //$this->load->view($this->_container, $data);
    }
}
