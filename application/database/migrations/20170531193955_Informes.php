<?php

class Migration_Informes extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'alumno_id' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'preg1' => array(
                'type' => 'VARCHAR',
                'constraint' => 3,
            ),
            'preg2' => array(
                'type' => 'VARCHAR',
                'constraint' => 3,
            ),
            'preg3' => array(
                'type' => 'VARCHAR',
                'constraint' => 3,
            ),
            'preg4' => array(
                'type' => 'VARCHAR',
                'constraint' => 3,
            ),
            'preg5' => array(
                'type' => 'VARCHAR',
                'constraint' => 3,
            ),
            'preg6' => array(
                'type' => 'VARCHAR',
                'constraint' => 3,
            ),
            'preg7' => array(
                'type' => 'VARCHAR',
                'constraint' => 3,
            ),
            'preg8' => array(
                'type' => 'VARCHAR',
                'constraint' => 3,
            ),
            'preg9' => array(
                'type' => 'VARCHAR',
                'constraint' => 3,
            ),
            'actividades' => array(
              'type' => 'TEXT',
              'constraint' => 250,
              'NULL' => TRUE
            ),
            'experiencia' => array(
              'type' => 'TEXT',
              'constraint' => 250,
              'NULL' => TRUE
            ),
            'observaciones' => array(
                'type' => 'TEXT',
                'constraint' => 250,
                'NULL' => TRUE
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
        $this->dbforge->drop_table('informes');
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('informes');
    }

    public function down() {
        $this->dbforge->drop_table('informes');
    }

}
