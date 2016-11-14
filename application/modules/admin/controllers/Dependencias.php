<?php

class Dependencias extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $group = 'admin';
        $this->load->library(array('ion_auth'));

        if (!$this->ion_auth->logged_in()) {
            redirect('/auth', 'refresh');
        }

        if(!$this->ion_auth->in_group($group)){
          $this->session->set_flashdata('message', 'Solo el administrador puede ver esta sección');
          redirect('admin/');
        }

        $this->load->model(array('admin/dependencia'));
    }

    public function index() {
        $dependencias = $this->dependencia->get_all();

        $data['dependencias'] = $dependencias;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "dependencias_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('nombre')) {
            $data['nombre'] = $this->input->post('nombre');
            $data['direccion'] = $this->input->post('direccion');
            $data['telefono'] = $this->input->post('telefono');

            $this->dependencia->insert($data);

            redirect('/admin/dependencias', 'refresh');
        }

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "dependencias_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('nombre')) {
            $data['nombre'] = $this->input->post('nombre');
            $data['direccion'] = $this->input->post('direccion');
            $data['telefono'] = $this->input->post('telefono');

            $this->dependencia->update($data, $id);

            redirect('/admin/dependencias', 'refresh');
        }

        $dependencia = $this->dependencia->get($id);

        //$proyecto = $this->proyecto->get_all();

        $data['dependencia'] = $dependencia;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "dependencias_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->dependencia->delete($id);

        redirect('/admin/dependencias', 'refresh');
    }
}
