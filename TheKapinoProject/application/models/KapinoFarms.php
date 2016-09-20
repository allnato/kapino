<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class KapinoFarms extends CI_Model {
    private $sys;

    public function __construct() {
        parent::__construct();
        $this->sys = $this->load->database('Kapino', TRUE);
    }

    public function AddFarms($table, $data) {
        $this->db->insert($table,$data);

        return $this->db->insert_id();
    }

    public function setFarmID($data, $email) {

        $farmID['farmID'] = $data;
        $condition = "email =" . "'" . $email . "'";

        $this->db->where($condition);
        $this->db->update('users', $farmID);
    }

}

?>
