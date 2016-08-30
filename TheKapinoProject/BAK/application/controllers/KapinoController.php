<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class KapinoController extends CI_Controller {
    
    var $name = 'Kapino_ctrl';
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        
        $this->load->library('session');
    
        
    }
    
    public function index() {
        $sid = session_id();
        if($sid) {
            //Do this if session exists
            $this->load->model('KapinoUsers');
            
            $homeData['userInfo'] = $this->KapinoUsers->getNameFromEmail($this->session->userdata('username'));
            $homeData['userFarmID'] = $this->KapinoUsers->getFarmID($this->session->userdata('username'));
        }
        else {
            $homeData['userInfo'] = null;
            $homeData['userFarmID'] = null;
        }
        $this->load->model('KapinoUsers');
        $this->load->view('landing-home.php', $homeData);
    }
    
    public function signup()
    {
        $sessionID = session_id();
        if($this->session->username == "") {
            $this->load->view('signup.php');
        }
        else {
            $this->load->view('market.php');
        }
        
    }
    public function login() {
        $userData = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );
        $this->load->model('KapinoUsers');
        $isLogged = $this->KapinoUsers->checkLoginCredentials('users', $userData);
        
        if($isLogged) {
            
            $userInfo = $this->KapinoUsers->getUserInfo($this->input->post('email'));
            //redirect(base_url() . 'index.php/profile');
            $userSession = array(
            'username' =>  $this->input->post('email'),
            'name' => $userInfo["firstName"],
            'isLogged' =>  TRUE,
            );
            $homeData['loginSuccess'] = true;
            $this->session->set_userdata($userSession);
            $userStatus = $this->KapinoUsers->isAdmin($this->input->post('email'));
            if($userStatus == "admin") {
                $this->TheDashboard();
            }
            else{$this->TheProfile();}
            
        }
        else {
            $homeData['loginSuccess'] = false;
            $this->index();
        }
    }
    
    public function addUsers() {
        
        $formData = array(
            'firstName' => $this->input->post('firstname'),
            'lastName' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'Address' => $this->input->post('address'),
            'mobileNum' => $this->input->post('mobile'),
            'regDate' => date("Y-m-d"),
        );
        
        $userData = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );        
        $this->load->model('KapinoUsers');
        $isLogged = $this->KapinoUsers->checkLoginCredentials('users', $userData);
        if(!$isLogged) {
            $this->KapinoUsers->insertData('users', $formData);    
            redirect('KapinoController/TheProfile', 'refresh');
        }
        else {
            $this->index();
        }
        
        
        //$this->index();
        
    }
    
    public function addFarms() {
        
        $formData = array(
            'farmID' => $this->input->post('farmID'),
            'name' => $this->input->post('name'),
            'location' => $this->input->post('location'),
            'size' => $this->input->post('farmtype'),
            'hectare' => $this->input->post('hectares'),
        );
        $this->load->model('KapinoFarms');
        $this->KapinoFarms->AddFarms('farms', $formData);
        redirect('KapinoController/TheProfile', 'refresh');
    }
    
    public function TheMarket() {
        $sid = session_id();
        if($sid) {
            //Do this if session exists
            $this->load->model('KapinoUsers');
            $this->load->model('KapinoProducts');
            $market['userInfo'] = $this->KapinoUsers->getNameFromEmail($this->session->userdata('username'));
            $market['userFarmID'] = $this->KapinoUsers->getFarmID($this->session->userdata('username'));
            $market['marketProducts'] = $this->KapinoProducts->getAllProducts();
        }
        else {
            $market['userInfo'] = null;
            $market['userFarmID'] = null;
        }
        $this->load->view('market.php', $market);
    }
     
    public function TheProfile() {
        $this->load->model('KapinoUsers');
        $IdFarm = $this->KapinoUsers->getFarmID($this->session->username);
        $profile['sessName'] = $this->KapinoUsers->getNameFromEmail($this->session->userdata('username'));
        $profile['userInfo'] = $this->KapinoUsers->getUserInfo($this->session->username);
        $profile['farmInfo'] = $this->KapinoUsers->getFarmInfo($IdFarm);
        $profile['favInfo'] = $this->KapinoUsers->getFavorites($this->session->username);
        $profile['prodInfo'] = $this->KapinoUsers->getAdvertisements($this->session->username);
        $this->load->view('profile', $profile);
    }
    public function TheMarketItem() {
        $this->load->model('KapinoUsers');
        $this->load->model('KapinoProducts');
        $sid = session_id();
        if($sid) {
            $marketData['userInfo'] = $this->KapinoUsers->getNameFromEmail($this->session->userdata('username'));
            $marketData['userFarmID'] = $this->KapinoUsers->getFarmID($this->session->userdata('username'));
        }
        else {
            $marketData['userInfo'] = null;
            $marketData['userFarmID'] = null;
        }
        
        $prodInfoString = $this->input->post('prodID');
        $prodInfo = array();
        $prodInfo = explode("_", $prodInfoString);
        $prodID = $prodInfo[0];
        
        $releaseDate = strtotime($prodInfo[2]);
        $releaseDate = date('F jS, Y', $releaseDate);
        $marketData['userData'] = $this->KapinoUsers->userMarketItem($prodInfo[1]);
        $marketData['releaseDate'] = $releaseDate;
        $marketData['prodData'] = $this->KapinoProducts->productMarketItem($prodID);
        $marketData['rateData'] = $this->KapinoProducts->getAllRatings();
        
        
        
        
        
        
        $this->load->view('market-item.php', $marketData);
    }
    
    public function TheSeller() {
        
        $this->load->view('seller.php');
    }
    
    public function TheLogout() {
        $userSession = array(
            'username' =>  '',
            'name' => '',
            'isLogged' =>  '',
        );
        $this->session->unset_userdata($userSession);
        $this->session->sess_destroy();
        $this->index();
    }
    
    public function TheNewAd() {
        $this->load->model('KapinoUsers');
        $this->load->model('KapinoProducts');
        
        $formData = array(
            "type" => $this->input->post('typeRadio'),
            "variety" => $this->input->post('varRadio'),
            "price" => $this->input->post('price'),
            "sellerID" => $this->KapinoUsers->getIDFromEmail($this->session->username),
            "farmID" => $this->KapinoUsers->getFarmID($this->session->username),
            "releaseDate" => date("Y-m-d"),
            "updateDate" => date("Y-m-d"),
        
        );
        
        $this->KapinoProducts->addNewProduct($formData);
        $this->TheProfile();
        
    }
    
    public function TheDashboard() {
        
       $this->TheUsers();
    }
    
    public function TheUsers() {
        $this->load->model('KapinoAdmin');
        $AdminUser['userList'] = $this->KapinoAdmin->getAllUsers();
        $AdminUser['activeUsers'] = $this->KapinoAdmin->getActiveSellers();
        $AdminUser['registeredUsers'] = $this->KapinoAdmin->countUsers();
        $this->load->view('admin-users.php', $AdminUser);
        
    }
    
    public function TheSellers() {
        
        $this->load->view('admin-seller.php');
    }
    
    public function TheProducts() {
        
        $this->load->view('admin-products.php');
    }
    
    public function TheAboutUs() {
         $sid = session_id();
        if($sid) {
            //Do this if session exists
            $this->load->model('KapinoUsers');
            
            $homeData['userInfo'] = $this->KapinoUsers->getNameFromEmail($this->session->userdata('username'));
            $homeData['userFarmID'] = $this->KapinoUsers->getFarmID($this->session->userdata('username'));
        }
        else {
            $homeData['userInfo'] = null;
            $homeData['userFarmID'] = null;
        }
        $this->load->view('aboutus.php', $homeData);
    }
    
}

?>