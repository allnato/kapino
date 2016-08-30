<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class KapinoAdmin extends CI_Model {
    private $sys;
    
    public function __construct() {
        parent::__construct();
        $this->sys = $this->load->database('Kapino', TRUE);
        $this->load->model('KapinoUsers');
    }
    
    public function getAllUsers() {
        
        $userList = array();
        
        $this->db->select("*");
        $this->db->from("users");
        $query = $this->db->get();
    
        foreach($query->result() as $row) {
            
            $userInfo = array(
                "userid" => $row->userID,
                "firstname" => $row->firstName,
                "lastname" => $row->lastName,
                "birthdate" => $row->birthDate,
                "email" => $row->email,
                "mobile" => $row->mobileNum,
                "address" => $row->address,
                "lastlogin" => $row->lastLogin,                
            );
            
            array_push($userList, $userInfo);
            
        }
        return $userList;
           
    }
    
    public function deleteUser($userID) {
        $condition ="userID ="."'". $userID ."'";
        $this->db->where($condition);
        $this->db->delete('users');
    }
    
    public function countUsers() {
        $this->db->select('COUNT(*) AS totalCount');
        $this->db->from('users');
        $result = $this->db->get();
        return $result->row()->totalCount;
    }
    
    public function getActiveSellers() {
        
        $totalActive = 0;
        $condition = "farmID IS NOT NULL AND status = 'active'";
        
        $this->db->select("COUNT(farmID) as activeCount");
        $this->db->from("users");
        $this->db->where($condition);
        $results = $this->db->get();
        
        $totalActive = $results->row()->activeCount;
        
        return $totalActive;
    }
    
    
   
}

?>