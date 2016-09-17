<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class KapinoUsers extends CI_Model {
    private $sys;

    public function __construct() {
        parent::__construct();
        $this->sys = $this->load->database();
    }


    public function insertData($table, $data) {
        $query = $this->db->insert($table,$data);
        return $query;
    }

    public function checkLoginCredentials($table, $data) {
        $lastLogin = array(
            'lastLogin' => date("Y-m-d H:m:s"),
        );
        $condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
        $this->db->select("*");
        $this->db->from('users');
        $this->db->where($condition);
        $this->db->limit('1');
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            $this->db->where($condition);
            $this->db->update($table, $lastLogin);
            return true;
        }
        else {
            return false;
        }
    }

    public function getUserInfo($data) {
        $condition = "email =" . "'" . $data . "'";
        $this->db->select("*");
        $this->db->from('users');
        $this->db->where($condition);
        $results = $this->db->get();
        $row = $results->row();
        $userInfo = array(
        "firstName" => $row->firstName,
        "lastName" =>  $row->lastName,
        "birthDate" => $row->birthDate,
        "email" => $row->email,
        "mobileNum" => $row->mobileNum,
        "address" => $row->address,
        "description" => $row->description,
        "farmID" => $row->farmID,

        );
        $userInfo['birthDate'] = strtotime($userInfo['birthDate']);
        $userInfo['birthDate'] = date('F j, Y', $userInfo['birthDate']);
        return $userInfo;


    }

    public function userMarketItem($data) {
        $condition = "userID =" . "'" . $data . "'";
        $this->db->select("userID,firstName,lastName,mobileNum,address,email");
        $this->db->from('users');
        $this->db->where($condition);
        $results = $this->db->get();
        $row = $results->row();
        $userInfo = array(
        "firstName" => $row->firstName,
        "lastName" =>  $row->lastName,
        "email" => $row->email,
        "mobileNum" => $row->mobileNum,
        "address" => $row->address,
        "userID" => $row->userID,

        );
        return $userInfo;


    }

    public function isAdmin($userData) {

        $condition = "email =" . "'" . $userData . "'";
        $this->db->select("status");
        $this->db->from("users");
        $this->db->where($condition);
        $query = $this->db->get();
        return $query->row()->status;

    }

    public function getFarmInfo($idFarm) {

        $this->db->select('*');
        $this->db->from('farms');
        $this->db->where("farmID =". $idFarm);
        $results = $this->db->get();
        $row = $results->row();
        if($results->num_rows() > 0) {
            $farmInfo = array(
            "farmID" => $row->farmID,
            "hectare" => $row->hectare,
            "location" => $row->location,
            "name" => $row->name,
            "size" => $row->size,

            );
        }
        else {
            $farmInfo = array(
            "farmID" => "This account is not a seller",
            "hectare" => "N/A",
            "location" => "N/A",
            "name" => "N/A",
            "size" => "N/A",

            );

        }

        return $farmInfo;
    }

    public function getFarmID($userData) {

        $condition = "email =" . "'" . $userData . "'";
        $this->db->select("farmID");
        $this->db->from("users");
        $this->db->where($condition);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row()->farmID;
        }
     return false;
    }

    public function getNameFromEmail($userEmail) {
        $condition ="email ="."'". $userEmail ."'";
        $this->db->select("firstName");
        $this->db->from("users");
        $this->db->where($condition);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row()->firstName;
        }
        return false;
    }

    public function getIDFromEmail($userEmail) {
        $condition ="email ="."'". $userEmail ."'";
        $this->db->select("userID");
        $this->db->from("users");
        $this->db->where($condition);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row()->userID;
        }
        return false;
    }

    public function getNameFromID($userID) {
        $condition ="userID ="."'". $userID ."'";
        $this->db->select("CONCAT((firstName),(' '),(lastName)) AS name");
        $this->db->from("users");
        $this->db->where($condition);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row()->name;
        }
        return false;
    }

    public function getEmailFromID($userID) {
        $condition ="userID ="."'". $userID ."'";
        $this->db->select("email");
        $this->db->from("users");
        $this->db->where($condition);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row()->email;
        }
        return false;
    }


    public function getFavorites($userEmail) {
        $userID = $this->getIDFromEmail($userEmail);
        $condition ="userID ="."'". $userID ."'";

        $this->db->select("*");
        $this->db->from("favorites");
        $this->db->where($condition);
        $query = $this->db->get();
        if($query->num_rows() > 0) {
            $favList=array();

            foreach ($query->result() as $row) {
                $condition ="prodID ="."'". $row->prodID ."'";
                $this->db->select("*");
                $this->db->from("products");
                $this->db->where($condition);
                $result = $this->db->get();
                $prodElements = array(
                    "prodID" => $row->prodID,
                    "type" => $result->row()->type,
                    "variety" => $result->row()->variety,
                    "seller" => $this->getNameFromID($result->row()->sellerID),
                    "faveDate" => $row->faveDate,
                );
                array_push($favList, $prodElements);
            }
            return $favList;
        }
        return false;

    }

    public function getAdvertisements($userEmail) {
        $userID = $this->getIDFromEmail($userEmail);
        $condition ="sellerID ="."'". $userID ."'";
        $this->db->select("*");
        $this->db->from("products");
        $this->db->where($condition);
        $query = $this->db->get();
        if($query->num_rows() > 0) {
            $prodlist = array();
            foreach ($query->result() as $row) {
                $prodElements = array(
                    "prodID" => $row->prodID,
                    "type" => $row->type,
                    "variety" => $row->variety,
                    "price" => $row->price,
                    "releaseDate" => $row->releaseDate,
                    "updateDate" => $row->updateDate,
                    "sellerID" => $row->sellerID,
                );

                array_push($prodlist, $prodElements);
            }

            return $prodlist;
        }
        return false;
    }

    public function modifyUserInfo($userInfo) {


    }

    public function addReview($formData) {

        $query = $this->db->insert('ratings', $formData);

        return $query;
    }

    public function isLiked($userID, $prodID) {
        $condition = "prodID =" . "'" . $prodID . "' AND " . "userID =" . "'" . $userID . "'";
        $this->db->select('*');
        $this->db->from('favorites');
        $this->db->where($condition);

        $query = $this->db->get();

        return $query->row();
    }

    public function deleteLike($userID, $prodID) {
        $condition = "prodID =" . "'" . $prodID . "' AND " . "userID =" . "'" . $userID . "'";
        $this->db->where($condition);
        $this->db->delete('favorites');
    }
    public function addLike($formData) {
        $queue = $this->db->insert('favorites', $formData);
    }


}

?>
