<?php

class Alumnos extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->library(array('ion_auth'));
        if (!$this->ion_auth->logged_in()) {
            redirect('/auth', 'refresh');
        }

        $this->load->model(array('admin/alumno'));
        $this->load->model(array('admin/proyecto'));
    }

    public function index() {
        $alumnos = $this->alumno->get_all();
        $proyectos = $this->proyecto->get_all();

        $data['alumnos'] = $alumnos;
        $data['proyectos'] = $proyectos;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "alumnos_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('nombres')) {
            $data['nombres'] = $this->input->post('nombres');
            $data['apellidos'] = $this->input->post('apellidos');
            $data['correo'] = $this->input->post('correo');
            $data['facultad'] = $this->input->post('facultad');
            $data['licenciatura'] = $this->input->post('licenciatura');
            $data['proyecto_id'] = $this->input->post('proyecto_id');
            $data['usuario_id'] = $this->input->post('usuario_id');

            $this->alumno->insert($data);

            redirect('/admin/alumnos', 'refresh');
        }

        $proyectos = $this->proyecto->get_all();
        $data['proyectos'] = $proyectos;

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "alumnos_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('nombres')) {
            $data['nombres'] = $this->input->post('nombres');
            $data['apellidos'] = $this->input->post('apellidos');
            $data['correo'] = $this->input->post('correo');
            $data['facultad'] = $this->input->post('facultad');
            $data['licenciatura'] = $this->input->post('licenciatura');
            $data['proyecto_id'] = $this->input->post('proyecto_id');
            $data['usuario_id'] = $this->input->post('usuario_id');

            $this->alumno->update($data, $id);

            redirect('/admin/alumnos', 'refresh');
        }

        $alumno = $this->alumno->get($id);
        $proyectos = $this->proyecto->get_all();

        $data['alumno'] = $alumno;
        $data['proyectos'] = $proyectos;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "alumnos_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->alumno->delete($id);

        redirect('/admin/alumnos', 'refresh');
    }

    public function view($id){

      $alumno = $this->alumno->get($id);
      $data['alumno'] = $alumno;
      $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "alumnos_view";
      $this->load->view($this->_container, $data);

    }
}
