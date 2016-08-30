<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class KapinoFarms extends CI_Model {
    private $sys;
    
    public function __construct() {
        parent::__construct();
        $this->sys = $this->load->database('Kapino', TRUE);
    }
    
    public function AddFarms() {
        
        $query = $this->db->insert($table,$data);
        return $query;
    }
    
    
   
}

?>