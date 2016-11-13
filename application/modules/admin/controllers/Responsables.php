<?php

class Responsables extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->library(array('ion_auth'));
        if (!$this->ion_auth->logged_in()) {
            redirect('/auth', 'refresh');
        }

        $this->load->model(array('admin/responsable'));
        $this->load->model(array('admin/dependencia'));
    }

    public function index() {
        $responsables = $this->responsable->get_all();
        $dependencias = $this->dependencia->get_all();

        $data['responsables'] = $responsables;
        $data['dependencias'] = $dependencias;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "responsables_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('nombres')) {
            //Crear usuario
            $username = $this->input->post('correo');
            $password = $this->input->post('password');
            $email = $this->input->post('correo');
            $group_id = array( $this->input->post('group_id'));

            $additional_data = array(
                'first_name' => $this->input->post('nombres'),
                'last_name' => $this->input->post('apellidos'),
                'username' => $this->input->post('correo'),
                'phone' => $this->input->post('telefono'),
            );


            $user = $this->ion_auth->register($email, $password, $email, $additional_data,$group_id);

            $data['nombres'] = $this->input->post('nombres');
            $data['apellidos'] = $this->input->post('apellidos');
            $data['correo'] = $this->input->post('correo');
            $data['telefono'] = $this->input->post('telefono');
            $data['dependencia_id'] = $this->input->post('dependencia_id');
            $data['usuario_id'] = $user;

            $this->responsable->insert($data);

            redirect('/admin/responsables', 'refresh');
        }

        $dependencias = $this->dependencia->get_all();
        $data['dependencias'] = $dependencias;

        $data['groups'] = $this->ion_auth->groups()->result();
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "responsables_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('nombres')) {
            $data['nombres'] = $this->input->post('nombres');
            $data['apellidos'] = $this->input->post('apellidos');
            $data['correo'] = $this->input->post('correo');
            $data['telefono'] = $this->input->post('telefono');
            $data['dependencia_id'] = $this->input->post('dependencia_id');
            $data['usuario_id'] = $this->input->post('usuario_id');

            $this->responsable->update($data, $id);

            redirect('/admin/responsables', 'refresh');
        }

        $responsable = $this->responsable->get($id);
        $dependencias = $this->dependencia->get_all();

        $data['responsable'] = $responsable;
        $data['dependencias'] = $dependencias;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "responsables_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->responsable->delete($id);

        redirect('/admin/responsables', 'refresh');
    }
}
