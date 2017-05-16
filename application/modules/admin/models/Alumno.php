<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Alumno extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_by_proyecto($id) {
        $data = array();
        $this->db->select('*');
        $this->db->from('alumnos');
        $this->db->where('proyecto_id', $id);
        $Q = $this->db->get();

        if ($Q->num_rows() > 0) {
            foreach ($Q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $Q->free_result();

        return $data;
    }

    public function get_by_responsable() {
        $data = array();
        $this->db->select('alumnos.id, alumnos.nombres, alumnos.apellidos, alumnos.correo, facultad, licenciatura,
         proyecto_id, proyectos.nombre, proyectos.responsable_id,
         responsables.usuario_id');
        $this->db->from('alumnos');
        $this->db->join('proyectos', 'proyectos.id = alumnos.proyecto_id');
        $this->db->join('responsables', 'proyectos.responsable_id = responsables.id');
        $Q = $this->db->get();

        if ($Q->num_rows() > 0) {
            foreach ($Q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $Q->free_result();

        return $data;
    }

    public function get_by_userId($id) {

        return $this->db->get_where('alumnos', array('usuario_id' => $id))->row();
    }
}
