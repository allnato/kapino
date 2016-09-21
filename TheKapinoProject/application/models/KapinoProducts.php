<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class KapinoProducts extends CI_Model {
    private $sys;

    public function __construct() {
        parent::__construct();
        $this->sys = $this->load->database('Kapino', TRUE);
        $this->load->model("KapinoUsers");
    }

    public function getAvgRating($row) {

        $condition ="prodID ="."'". $row->prodID ."'";
        $this->db->select("ROUND(AVG(rate), 2) AS Rate");
        $this->db->from("ratings");
        $this->db->where($condition);
        $ratingResult = $this->db->get();
        $ratingRes = $ratingResult->row()->Rate;
        return $ratingRes;
    }
    public function getCountRating($row) {
        $condition ="prodID ="."'". $row->prodID ."'";
        $this->db->select("COUNT(*) as Count");
        $this->db->from("ratings");
        $this->db->where($condition);
        $countResult = $this->db->get();
        $countRes = $countResult->row()->Count;
        return $countRes;

    }

    public function getFarmLocation($farmID) {


        $condition ="farmID ="."'". $farmID ."'";
        $this->db->select("location");
        $this->db->from("farms");
        $this->db->where($condition);
        $location = $this->db->get();
        $locRes = $location->row()->location;
        return $locRes;

    }

    public function getAllProducts() {

        $this->db->select("*");
        $this->db->from("products");
        $prodResult = $this->db->get();
        $prodList = array();
        foreach($prodResult->result() as $row) {

            $prodElements = array(
            "prodID" => $row->prodID,
            "type" => $row->type,
            "variety" => $row->variety,
            "price" => $row->price,
            "releaseDate" => $row->releaseDate,
            "updateDate" => $row->updateDate,
            "seller" => $this->KapinoUsers->getNameFromID($row->sellerID),
            "sellerID" => $row->sellerID,
            "avgRating" => $this->getAvgRating($row),
            "noOfRating" => $this->getCountRating($row),
            "address" => $this->getFarmLocation($row->farmID),
            );
            array_push($prodList, $prodElements);
        }
        return $prodList;
    }

    public function getDateProducts($group) {
        $this->db->select("*");
        $this->db->from("products");
        $this->db->order_by($group);
        $prodResult = $this->db->get();
        $prodList = array();
        foreach($prodResult->result() as $row) {

            $prodElements = array(
            "prodID" => $row->prodID,
            "type" => $row->type,
            "variety" => $row->variety,
            "price" => $row->price,
            "releaseDate" => $row->releaseDate,
            "updateDate" => $row->updateDate,
            "seller" => $this->KapinoUsers->getNameFromID($row->sellerID),
            "sellerID" => $row->sellerID,
            "avgRating" => $this->getAvgRating($row),
            "noOfRating" => $this->getCountRating($row),
            "address" => $this->getFarmLocation($row->farmID),
            );
            array_push($prodList, $prodElements);
        }
        return $prodList;

    }

    public function getRateProducts() {
        $this->db->select("*");
        $this->db->from("products p, ratings r");
        $this->db->where('p.prodID = r.prodID');
        $this->db->group_by('r.prodID');
        $this->db->order_by('AVG(r.rate) DESC');
        $prodResult = $this->db->get();
        $prodList = array();
        foreach($prodResult->result() as $row) {

            $prodElements = array(
            "prodID" => $row->prodID,
            "type" => $row->type,
            "variety" => $row->variety,
            "price" => $row->price,
            "releaseDate" => $row->releaseDate,
            "updateDate" => $row->updateDate,
            "seller" => $this->KapinoUsers->getNameFromID($row->sellerID),
            "sellerID" => $row->sellerID,
            "avgRating" => $this->getAvgRating($row),
            "noOfRating" => $this->getCountRating($row),
            "address" => $this->getFarmLocation($row->farmID),
            );
            array_push($prodList, $prodElements);
        }
        return $prodList;

    }

    public function getFilterProducts($type, $var) {
        $condition = "type = '$type' AND variety = '$var'";
        $this->db->select("*");
        $this->db->from("products");
        $this->db->where($condition);
        $prodResult = $this->db->get();
        $prodList = array();
        foreach($prodResult->result() as $row) {

            $prodElements = array(
            "prodID" => $row->prodID,
            "type" => $row->type,
            "variety" => $row->variety,
            "price" => $row->price,
            "releaseDate" => $row->releaseDate,
            "updateDate" => $row->updateDate,
            "seller" => $this->KapinoUsers->getNameFromID($row->sellerID),
            "sellerID" => $row->sellerID,
            "avgRating" => $this->getAvgRating($row),
            "noOfRating" => $this->getCountRating($row),
            "address" => $this->getFarmLocation($row->farmID),
            );
            array_push($prodList, $prodElements);
        }
        return $prodList;

    }

    public function getVarProducts($var){
      $condition = "variety = '$var'";
      $this->db->select("*");
      $this->db->from("products");
      $this->db->where($condition);
      $prodResult = $this->db->get();
      $prodList = array();
      foreach($prodResult->result() as $row) {

          $prodElements = array(
          "prodID" => $row->prodID,
          "type" => $row->type,
          "variety" => $row->variety,
          "price" => $row->price,
          "releaseDate" => $row->releaseDate,
          "updateDate" => $row->updateDate,
          "seller" => $this->KapinoUsers->getNameFromID($row->sellerID),
          "sellerID" => $row->sellerID,
          "avgRating" => $this->getAvgRating($row),
          "noOfRating" => $this->getCountRating($row),
          "address" => $this->getFarmLocation($row->farmID),
          );
          array_push($prodList, $prodElements);
      }
      return $prodList;
    }

    public function getTypeProducts($type){
      $condition = "type = '$type'";
      $this->db->select("*");
      $this->db->from("products");
      $this->db->where($condition);
      $prodResult = $this->db->get();
      $prodList = array();
      foreach($prodResult->result() as $row) {

          $prodElements = array(
          "prodID" => $row->prodID,
          "type" => $row->type,
          "variety" => $row->variety,
          "price" => $row->price,
          "releaseDate" => $row->releaseDate,
          "updateDate" => $row->updateDate,
          "seller" => $this->KapinoUsers->getNameFromID($row->sellerID),
          "sellerID" => $row->sellerID,
          "avgRating" => $this->getAvgRating($row),
          "noOfRating" => $this->getCountRating($row),
          "address" => $this->getFarmLocation($row->farmID),
          );
          array_push($prodList, $prodElements);
      }
      return $prodList;

    }


    public function productMarketItem($prodID) {

        $condition ="prodID ="."'". $prodID ."'";
        $this->db->select("prodID, type, variety, price");
        $this->db->from("products");
        $this->db->where($condition);
        $results = $this->db->get();
        $row = $results->row();
        $productInfo = array(
            "prodID" => $row->prodID,
            "type" => $row->type,
            "variety" => $row->variety,
            "price" => $row->price,
            "rateCount" => $this->getCountRating($row),

        );
        return $productInfo;
    }


    public function getAllRatings() {

        $this->db->select("*");
        $this->db->from("ratings");
        $query = $this->db->get();
        $rateList = array();
        foreach($query->result() as $row) {
            $rateElements = array(
                "rateID" => $row->rateID,
                "raterID" => $row->raterID,
                "feedback" => $row->feedback,
                "prodID" => $row->prodID,
                "rate" => $row->rate,
                "Rater" => $this->KapinoUsers->getNameFromID($row->raterID),

            );
            array_push($rateList, $rateElements);
        }
        return $rateList;
    }

    public function addNewProduct($formData) {

        $query = $this->db->insert('products',$formData);
    }

    public function editProduct($formData) {
        $condition ="prodID ="."'". $formData['prodID'] ."'";
        $this->db->where($condition);
        $query = $this->db->update('products', $formData);
    }

    public function deleteProduct($formData) {
        $condition ="prodID ="."'". $formData['prodID'] ."'";
        $this->db->where($condition);
        $this->db->delete('products');
    }


}

?>
