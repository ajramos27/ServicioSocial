<?php

class Migration_Formularios extends CI_Migration {

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
            'form_num' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'horas' => array(
                'type' => 'VARCHAR',
                'constraint' => 11,
            ),
            'asistePuntual' => array(
                'type' => 'VARCHAR',
                'constraint' => 3,
            ),
            'cumpleHorario' => array(
                'type' => 'VARCHAR',
                'constraint' => 3,
            ),
            'demuestraOrganizacion' => array(
                'type' => 'VARCHAR',
                'constraint' => 3,
            ),
            'demuestraCompetencias' => array(
                'type' => 'VARCHAR',
                'constraint' => 3,
            ),
            'optimizaRecursos' => array(
                'type' => 'VARCHAR',
                'constraint' => 3,
            ),
            'estableceRelaciones' => array(
                'type' => 'VARCHAR',
                'constraint' => 3,
            ),
            'atiendeIndicaciones' => array(
                'type' => 'VARCHAR',
                'constraint' => 3,
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
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('formularios');
    }

    public function down() {
        $this->dbforge->drop_table('formularios');
    }

}
