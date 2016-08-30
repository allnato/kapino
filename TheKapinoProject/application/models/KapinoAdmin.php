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
    
    // pending sellers
    
    public function getActiveSellers() {
        
        $this->db->select("COUNT(farmID) as activeCount");
        $this->db->from("users");
        $this->db->where("farmID IS NOT NULL");
        $this->db->where("status = 'active'");
        $results = $this->db->get();
        
        return $results->row()->activeCount;
    }
    
    /*public function getActiveSellersPerMonth() {
        
        $activeSellersPerMonth = array();
    }*/
    
    public function countUsers() {
        $this->db->select('COUNT(*) AS totalCount');
        $this->db->from('users');
        $result = $this->db->get();
        return $result->row()->totalCount;
    }
    
    public function getBannedUsers() {
        
        $this->db->select("COUNT(*) as bannedCount");
        $this->db->from("users");
        $this->db->where("status = 'suspended'");
        $results = $this->db->get();
        
        return $results->row()->bannedCount;
    }
    
    public function getActiveUsers() {
            
        $this->db->select("COUNT(*) as activeCount");
        $this->db->from("users");
        $this->db->where("status = 'active'");
        $results = $this->db->get();
        
        return $results->row()->activeCount;
    }
    
    public function getCoffeeTypeOfMonth() {
        
        $coffeeList = array();
        
        $this->db->select("COUNT(*) as Total,
    SUM(case WHEN type = 'Liberica' AND MONTH(updateDate) = MONTH(CURRENT_DATE()) then 1 else 0 end) as LibericaCount,
    SUM(case WHEN type = 'Robusta' AND MONTH(updateDate) = MONTH(CURRENT_DATE()) then 1 else 0 end) as RobustaCount,
    SUM(case WHEN type = 'Arabica' AND MONTH(updateDate) = MONTH(CURRENT_DATE()) then 1 else 0 end) as ArabicaCount", FALSE);
        $this->db->from("products");
        $query = $this->db->get();
        
        foreach($query->result() as $row) {
            
            $coffeeInfo = array(
                "total" => $row->Total,
                "liberica" => $row->LibericaCount,
                "robusta" => $row->RobustaCount,
                "arabica" => $row->ArabicaCount,
            );
            
            array_push($coffeeList, $coffeeInfo);
        }
        
        return $coffeeList;
    }
    
    public function getCoffeeVarOfMonth() {
        
        $coffeeList = array();
        
        $this->db->select("COUNT(*) as Total,
    SUM(case WHEN variety = 'roasted' AND MONTH(updateDate) = MONTH(CURRENT_DATE()) then 1 else 0 end) as RoastedCount,
    SUM(case WHEN variety = 'dried' AND MONTH(updateDate) = MONTH(CURRENT_DATE()) then 1 else 0 end) as DriedCount,
    SUM(case WHEN variety = 'fresh' AND MONTH(updateDate) = MONTH(CURRENT_DATE()) then 1 else 0 end) as FreshCount", FALSE);
        $this->db->from("products");
        $query = $this->db->get();
        
        foreach($query->result() as $row) {
            
            $coffeeInfo = array(
                "total" => $row->Total,
                "roasted" => $row->RoastedCount,
                "dried" => $row->DriedCount,
                "fresh" => $row->FreshCount,
            );
            
            array_push($coffeeList, $coffeeInfo);
        }
        
        return $coffeeList;
    }
    
    public function getSellersPerMonth() {
        
        $sellerList = array();
        
        $this->db->select("m as Month, Count(users.userID) as RegSellerCount
            FROM (
            SELECT m, y
            FROM
            (SELECT YEAR(curdate()) y ) years,
            (SELECT 1 m UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4
            UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8
            UNION ALL SELECT 9 UNION ALL SELECT 10 UNION ALL SELECT 11 UNION ALL SELECT 12
            ) months ) ym
            LEFT JOIN users
            ON ym.m = MONTH(users.sellStart)
            AND ym.y = YEAR(users.sellStart)
            GROUP BY m", FALSE);
        $query = $this->db->get();
        
        foreach($query->result() as $row) {
            
            $sellerInfo = array(
                "month" => $row->Month,
                "regsellercount" => $row->RegSellerCount,
            );
            
            array_push($sellerList, $sellerInfo);
        }
        
        return $sellerList;
    }
    
    public function getRegUsersPerMonth() {
        
        $regUserList = array();
        
        $this->db->select("m as Month, Count(users.userID) as RegUserCount
            FROM (
            SELECT m, y
            FROM
            (SELECT YEAR(curdate()) y ) years,
            (SELECT 1 m UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4
            UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8
            UNION ALL SELECT 9 UNION ALL SELECT 10 UNION ALL SELECT 11 UNION ALL SELECT 12
            ) months ) ym
            LEFT JOIN users
            ON ym.m = MONTH(users.regDate)
            AND ym.y = YEAR(users.regDate)
            GROUP BY m", FALSE);
        $query = $this->db->get();
        
        foreach($query->result() as $row) {
            
            $regUserInfo = array(
                "month" => $row->Month,
                "regusercount" => $row->RegUserCount,
            );
            
            array_push($regUserList, $regUserInfo);
        }
        
        return $regUserList;
    }
    
    public function getCoffeeTypePerMonth() {
        
        $coffeeList = array();
        
        $this->db->select("IFNULL(SUM(case WHEN type = 'Liberica' then 1 else 0 end), 0) as LibericaCount,
            IFNULL(SUM(case WHEN type = 'Robusta' then 1 else 0 end), 0) as RobustaCount,
            IFNULL(SUM(case WHEN type = 'Arabica' then 1 else 0 end), 0) as ArabicaCount,
            COUNT(type) as Total
            FROM (
            SELECT m, y
            FROM
            (SELECT YEAR(curdate()) y ) years,
            (SELECT 1 m UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4
            UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8
            UNION ALL SELECT 9 UNION ALL SELECT 10 UNION ALL SELECT 11 UNION ALL SELECT 12
            ) months ) ym
            LEFT JOIN products
            ON ym.m = MONTH(products.updateDate)
            AND ym.y = YEAR(products.updateDate)
            GROUP BY m", FALSE);
        $query = $this->db->get();
        
        foreach($query->result() as $row) {
            
            $coffeeInfo = array(
                "liberica" => $row->LibericaCount,
                "robusta" => $row->RobustaCount,
                "arabica" => $row->ArabicaCount,
                "total" => $row->Total,
            );
            
            array_push($coffeeList, $coffeeInfo);
        }
        
        return $coffeeList;
    }
    
    public function getCoffeeVarPerMonth() {
        
        $coffeeList = array();
        
        $this->db->select("IFNULL(SUM(case WHEN variety = 'roasted' then 1 else 0 end), 0) as RoastedCount,
        IFNULL(SUM(case WHEN variety = 'dried' then 1 else 0 end), 0) as DriedCount,
        IFNULL(SUM(case WHEN variety = 'fresh' then 1 else 0 end), 0) as FreshCount,
        COUNT(variety) as Total
        FROM (
        SELECT m, y
        FROM
		(SELECT YEAR(curdate()) y ) years,
		(SELECT 1 m UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4
        UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8
        UNION ALL SELECT 9 UNION ALL SELECT 10 UNION ALL SELECT 11 UNION ALL SELECT 12
        ) months ) ym
        LEFT JOIN products
		ON ym.m = MONTH(products.updateDate)
		AND ym.y = YEAR(products.updateDate)
        GROUP BY m", FALSE);
        $query = $this->db->get();
        
        foreach($query->result() as $row) {
            
            $coffeeInfo = array(
                "roasted" => $row->RoastedCount,
                "dried" => $row->DriedCount,
                "fresh" => $row->FreshCount,
                "total" => $row->Total,
            );
            
            array_push($coffeeList, $coffeeInfo);
        }
        
        return $coffeeList;
    }
    
    public function getCoffeeTrendOfYear() {
        
        $coffeeList = array();
        
        $this->db->select("IFNULL(SUM(case WHEN variety = 'roasted' AND type = 'Robusta' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as RRCount,
        IFNULL(SUM(case WHEN variety = 'dried' AND type = 'Robusta' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as DRCount,
        IFNULL(SUM(case WHEN variety = 'fresh' AND type = 'Robusta' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as FRCount,
        IFNULL(SUM(case WHEN variety = 'roasted' AND type = 'Arabica' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as RACount,
        IFNULL(SUM(case WHEN variety = 'dried' AND type = 'Arabica' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as DACount,
        IFNULL(SUM(case WHEN variety = 'fresh' AND type = 'Arabica' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as FACount,
        IFNULL(SUM(case WHEN variety = 'roasted' AND type = 'Liberica' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as RLCount,
        IFNULL(SUM(case WHEN variety = 'dried' AND type = 'Liberica' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as DLCount,
        IFNULL(SUM(case WHEN variety = 'fresh' AND type = 'Liberica' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as FLCount,
        COUNT(type) as Total
        FROM (
        SELECT m, y
        FROM
		(SELECT YEAR(curdate()) y ) years,
		(SELECT 1 m UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4
        UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8
        UNION ALL SELECT 9 UNION ALL SELECT 10 UNION ALL SELECT 11 UNION ALL SELECT 12
        ) months ) ym
        LEFT JOIN products
        ON ym.m = MONTH(products.updateDate)
		AND ym.y = YEAR(products.updateDate)", FALSE);
        $query = $this->db->get();
        
        foreach($query->result() as $row) {
            
            $coffeeInfo = array(
                "rrcount" => $row->RRCount,
                "drcount" => $row->DRCount,
                "frcount" => $row->FRCount,
                "racount" => $row->RACount,
                "dacount" => $row->DACount,
                "facount" => $row->FACount,
                "rlcount" => $row->RLCount,
                "dlcount" => $row->DLCount,
                "flcount" => $row->FLCount,
                "total" => $row->Total
            );
            
            array_push($coffeeList, $coffeeInfo);
        }
        
        return $coffeeList;
    }
}

?>