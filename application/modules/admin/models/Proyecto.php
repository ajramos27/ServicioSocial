<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Proyecto extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_responsable() {
        $data = array();
        $this->db->select('proyectos.id, nombre, responsable_id, responsables.usuario_id');
        $this->db->from('proyectos');
        $this->db->join('responsables', 'responsables.id = proyectos.responsable_id');
        $Q = $this->db->get();

        if ($Q->num_rows() > 0) {
            foreach ($Q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $Q->free_result();

        return $data;
    }
}
