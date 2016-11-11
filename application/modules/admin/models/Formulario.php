<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Formulario extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_formularios_by_alumno($id) {
        $data = array();
        $this->db->select('*');
        $this->db->from('formularios');
        $this->db->where('alumno_id', $id);
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
