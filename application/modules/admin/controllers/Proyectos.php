<?php

class Proyectos extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->library(array('ion_auth'));
        if (!$this->ion_auth->logged_in()) {
            redirect('/auth', 'refresh');
        }

        $this->load->model(array('admin/proyecto'));
    }

    public function index() {
        $proyectos = $this->proyecto->get_all();

        $data['proyectos'] = $proyectos;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "proyectos_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('descripcion')) {
            $data['descripcion'] = $this->input->post('descripcion');
            $data['responsable_id'] = $this->input->post('responsable_id');

            $this->proyecto->insert($data);

            redirect('/admin/proyectos', 'refresh');
        }

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "proyectos_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('descripcion')) {
            $data['descripcion'] = $this->input->post('descripcion');
            $data['responsable_id'] = $this->input->post('responsable_id');

            $this->proyecto->update($data, $id);

            redirect('/admin/proyectos', 'refresh');
        }

        $proyecto = $this->proyecto->get($id);

        //$proyecto = $this->proyecto->get_all();

        $data['proyecto'] = $proyecto;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "proyectos_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->proyecto->delete($id);

        redirect('/admin/proyectos', 'refresh');
    }
}
