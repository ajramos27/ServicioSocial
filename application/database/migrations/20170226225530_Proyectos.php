<?php

class Migration_Proyectos extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'nombre' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'responsable_id' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'licEdu' => array(
                'type' => 'BOOL',
                'null' => TRUE
            ),
            'licEi' => array(
                'type' => 'BOOL',
                'null' => TRUE
            ),
            'tipo' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'vigencia' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'created_from_ip' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'updated_from_ip' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'date_created' => array(
                'type' => 'DATETIME'
            ),
            'date_updated' => array(
                'type' => 'DATETIME'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('proyectos');

        $data = array(
            'id' => '1',
            'nombre' => 'Aprendizaje Movil',
            'responsable_id' => '1',
            'licEdu' => TRUE,
            'licEi' => FALSE,
            'tipo' => 'Externo',
            'vigencia' => 'Enero 2018',
        );
        $this->db->insert('proyectos', $data);
    }

    public function down() {
        $this->dbforge->drop_table('proyectos');
    }

}
