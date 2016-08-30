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
    
    // edit starts here
    // returns single integer
    public function getActiveSellers() {
        
        $totalActive = 0;
        $condition = "farmID IS NOT NULL AND status = 'active'";
        
        $this->db->select("COUNT(farmID) as activeCount");
        $this->db->from("users");
        $this->db->where($condition);
        results = $this->db->get();
        
        $totalActive = $query->results()->activeCount;
        
        return totalActive;
    }
    
    // returns array
    public function getNewSellersPerMonth() {
        
        $newMonthSeller = array();
        $condition = "(
  SELECT m, y
  FROM
	(SELECT YEAR(curdate()) y ) years,
    (SELECT 1 m UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4
      UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8
      UNION ALL SELECT 9 UNION ALL SELECT 10 UNION ALL SELECT 11 UNION ALL SELECT 12
      ) months ) ym
  LEFT JOIN users
  ON ym.m = MONTH(users.sellStart)
  AND ym.y = YEAR(users.sellStart)";
        
        $this->db->select("m as Month, Count(users.userID) as RegUserCount");
        $this->db->from($condition);
        $this->db->where("(y=YEAR(CURDATE()) AND m<=MONTH(CURDATE()))
  OR
  (y=YEAR(CURDATE()) AND m>MONTH(CURDATE()))");
        $this->db->group-by("m");
        
        $query = $this->db->get();
    
        foreach($query->result() as $row) {
            
            $sellerInfo = array(
                "month" => $row->Month,
                "regusercount" => $row->RegUserCount
            );
            
            array_push($newMonthSeller, $sellerInfo);
            
        }
        return $newMonthSeller;
    }
    
    public function getCurMonthCType() {
        
        $curMonthCType = array();
        
        $condition = "COUNT(*) as Total,
    SUM(case WHEN type = 'Liberica' AND MONTH(updateDate) = MONTH(CURRENT_DATE()) then 1 else 0 end) as LibericaCount,
    SUM(case WHEN type = 'Robusta' AND MONTH(updateDate) = MONTH(CURRENT_DATE()) then 1 else 0 end) as RobustaCount,
    SUM(case WHEN type = 'Arabica' AND MONTH(updateDate) = MONTH(CURRENT_DATE()) then 1 else 0 end) as ArabicaCount";
        
        $this->db->select($condition);
        $this->db->from("products");
        
        $query = $this->db->get();
    
        foreach($query->result() as $row) {
            
            $typeInfo = array(
                "total" => $row->Total,
                "libericacount" => $row->LibericaCount,
                "robustacount" => $row->RobustaCount,
                "arabicacount" => $row->ArabicaCount
            );
            
            array_push($curMonthCType, $typeInfo);
            
        }
        return curMonthCType;
    }
    
    public function getCurMonthCVar() {
        
        $curMonthCVar = array();
        
        $condition = "COUNT(*) as Total,
    SUM(case WHEN variety = 'roasted' AND MONTH(updateDate) = MONTH(CURRENT_DATE()) then 1 else 0 end) as RoastedCount,
    SUM(case WHEN variety = 'dried' AND MONTH(updateDate) = MONTH(CURRENT_DATE()) then 1 else 0 end) as DriedCount,
    SUM(case WHEN variety = 'fresh' AND MONTH(updateDate) = MONTH(CURRENT_DATE()) then 1 else 0 end) as FreshCount";
        
        $this->db->select($condition);
        $this->db->from("products");
        
        $query = $this->db->get();
        
        foreach($query->result() as $row) {
            
            $varInfo = array(
                "total" => $row->Total,
                "roastedcount" => $row->RoastedCount,
                "driedcount" => $row->DriedCount,
                "freshcount" => $row->FreshCount
            );
            
            array_push($curMonthCVar, $varInfo);
            
        }
        return curMonthCVar;
    }
    
    public function getRegisteredUsers() {
        
        $regUsers = 0;
        
        $this->db->select("COUNT(*) as regCount");
        $this->db->from("users");
        results = $this->db->get();
        
        $regUsers = $query->results()->regCount;
        
        return regUsers;
    }
    
    public function getActiveUsers() {
        
        $activeUsers = 0;
        
        $this->db->select("COUNT(*) as activeCount");
        $this->db->from("users");
        $this->db->where("status = 'active'");
        results = $this->db->get();
        
        $activeUsers = $query->results()->activeCount;
        
        return activeUsers;
    }
    
    public function getBannedUsers() {
        
        $bannedUsers = 0;
        
        $this->db->select("COUNT(*) as bannedCount");
        $this->db->from("users");
        $this->db->where("status = 'suspended'");
        results = $this->db->get();
        
        $bannedUsers = $query->results()->bannedCount;
        
        return bannedUsers;
    }
    
    public function getBannedUsers() {
        
        $inactiveUsers = 0;
        
        $this->db->select("COUNT(*) as inactiveCount");
        $this->db->from("users");
        $this->db->where("status = 'inactive'");
        results = $this->db->get();
        
        $inactiveUsers = $query->results()->inactiveCount;
        
        return inactiveUsers;
    }
    
    public function getRegUsersPerMonth() {
        
        $regUsers = array();
        
        $condition = "SELECT m, y
  FROM
	(SELECT YEAR(curdate()) y ) years,
    (SELECT 1 m UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4
      UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8
      UNION ALL SELECT 9 UNION ALL SELECT 10 UNION ALL SELECT 11 UNION ALL SELECT 12
      ) months ) ym
  LEFT JOIN users
  ON ym.m = MONTH(users.regDate)
  AND ym.y = YEAR(users.regDate)";
        
        $this->db->select("m as Month, Count(users.userID) as RegUserCount");
        $this->db->from($condition);
        $this->db->where("(y=YEAR(CURDATE()) AND m<=MONTH(CURDATE()))
  OR
  (y=YEAR(CURDATE()) AND m>MONTH(CURDATE()))");
        $this->db->group-by("m");
        
        $query = $this->db->get();
        
        foreach($query->result() as $row) {
            
            $regInfo = array(
                "month" => $row->Month,
                "regusercount" => $row->RegUserCount
            );
            
            array_push($regUsers, $regInfo);
            
        }
        
        return regUsers;
    }
   
}

?>