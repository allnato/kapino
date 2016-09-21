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
            else{redirect(site_url('profile'), 'refresh');}

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
            'birthDate' => $this->input->post('birthdate'),
            'regDate' => date("Y-m-d"),
        );

        $userSession = array(
        'username' =>  $this->input->post('email'),
        'name' => $this->input->post('firstname'),
        'isLogged' =>  TRUE,
        );
        $userData = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );
        $this->session->set_userdata($userSession);
        $this->load->model('KapinoUsers');
        $isLogged = $this->KapinoUsers->checkLoginCredentials('users', $userData);
        if(!$isLogged) {
            $this->KapinoUsers->insertData('users', $formData);
            redirect(site_url('profile'), 'refresh');
        }
        else {
            $this->index();
        }


        //$this->index();

    }

    public function addFarms() {

        $formData = array(
            'name' => $this->input->post('name'),
            'location' => $this->input->post('location'),
            'size' => $this->input->post('farmtype'),
            'hectare' => $this->input->post('hectares'),
        );
        $this->load->model('KapinoFarms');
        $id = $this->KapinoFarms->AddFarms('farms', $formData);
        $this->KapinoFarms->setFarmID($id, $this->session->userdata('username'));
        redirect(site_url('profile'), 'refresh');
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

    public function TheSortMarket() {
        $sid = session_id();
        $filterDate = $this->input->post('checkboxDate');
        $filterRate = $this->input->post('checkboxRate');
        if($sid) {
            //Do this if session exists
            $this->load->model('KapinoUsers');
            $this->load->model('KapinoProducts');
            $market['userInfo'] = $this->KapinoUsers->getNameFromEmail($this->session->userdata('username'));
            $market['userFarmID'] = $this->KapinoUsers->getFarmID($this->session->userdata('username'));
            if($filterDate == null) {

                $group = 'updateDate';
                $market['marketProducts'] = $this->KapinoProducts->getDateProducts($group);
            }
            else if(filterRate == null)
                var_dump('RATE');
                $market['marketProducts'] = $this->KapinoProducts->getRateProducts();
        }
        else {
            $market['userInfo'] = null;
            $market['userFarmID'] = null;
        }
        $this->load->view('market.php', $market);
    }

    public function TheVarietyMarket() {

        $sid = session_id();
        $filterArabica = $this->input->get('checkboxArabica');
        $filterRobusta = $this->input->get('checkboxRobusta');
        $filterLiberica = $this->input->get('checkboxLiberica');

        $filterDried = $this->input->get('checkboxDried');
        $filterRoasted = $this->input->get('checkboxRoasted');
        $filterFresh = $this->input->get('checkboxFresh');

        if($sid) {
            //Do this if session exists
            $this->load->model('KapinoUsers');
            $this->load->model('KapinoProducts');
            $market['userInfo'] = $this->KapinoUsers->getNameFromEmail($this->session->userdata('username'));
            $market['userFarmID'] = $this->KapinoUsers->getFarmID($this->session->userdata('username'));
        }
        else {
            $market['userInfo'] = null;
            $market['userFarmID'] = null;
        }
        $market['marketProducts'] = "";
        if($filterArabica != null && $filterDried != null) {
            $type = 'Arabica';
            $var = 'Dried';
            $market['marketProducts'] = $this->KapinoProducts->getFilterProducts($type, $var);
        }
        else if($filterArabica != null && $filterRoasted != null) {
            $type = 'Arabica';
            $var = 'Roasted';
            $market['marketProducts'] = $this->KapinoProducts->getFilterProducts($type, $var);
        }
        else if($filterArabica != null && $filterFresh != null) {
            $type = 'Arabica';
            $var = 'Fresh';
            $market['marketProducts'] = $this->KapinoProducts->getFilterProducts($type, $var);
        }
        else if($filterRobusta != null && $filterDried != null) {
            $type = 'Robusta';
            $var = 'Dried';
            $market['marketProducts'] = $this->KapinoProducts->getFilterProducts($type, $var);
        }
        else if($filterRobusta != null && $filterRoasted != null) {
            $type = 'Robusta';
            $var = 'Roasted';
            $market['marketProducts'] = $this->KapinoProducts->getFilterProducts($type, $var);
        }
        else if($filterRobusta != null && $filterFresh != null) {
            $type = 'Robusta';
            $var = 'Fresh';
            $market['marketProducts'] = $this->KapinoProducts->getFilterProducts($type, $var);
        }
        else if($filterLiberica != null && $filterDried != null) {
            $type = 'Liberica';
            $var = 'Dried';
            $market['marketProducts'] = $this->KapinoProducts->getFilterProducts($type, $var);
        }
        else if($filterLiberica != null && $filterRoasted != null) {
            $type = 'Liberica';
            $var = 'Roasted';
            $market['marketProducts'] = $this->KapinoProducts->getFilterProducts($type, $var);
        }
        else if($filterLiberica != null && $filterFresh != null) {
            $type = 'Liberica';
            $var = 'Fresh';
            $market['marketProducts'] = $this->KapinoProducts->getFilterProducts($type, $var);
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
        $profile['disable'] = 0;
        $this->load->view('profile', $profile);
    }

    public function editProfile(){
      $result;
      $this->load->model('KapinoUsers');
      $userInfo['firstName'] = $this->input->post('firstname');
      $userInfo['lastName'] = $this->input->post('lastname');
      $userInfo['birthDate'] = $this->input->post('birthdate');
      $userInfo['mobileNum'] = $this->input->post('mobile');
      $userInfo['address'] = $this->input->post('address');
      $userInfo['email'] = $this->session->userdata('username');

      $result = $this->KapinoUsers->modifyUserInfo($userInfo);

      echo json_encode($result);
    }

    public function editFarm(){
      $this->load->model('KapinoUsers');
      $farmInfo['name'] = $this->input->post('farmname');
      $farmInfo['hectare'] = $this->input->post('farmhectare');
      $farmInfo['location'] = $this->input->post('farmlocation');
      $farmInfo['size'] = $this->input->post('farmsize');
      $email = $this->session->userdata('username');
      $result = $this->KapinoUsers->modifyFarmInfo($farmInfo, $email);
      echo json_encode($result);
    }

    public function TheSellerProfile() {
        $this->load->model('KapinoUsers');
        $sellerID = $this->input->post('sellerID');
        $sellerEmail = $this->KapinoUsers->getEmailFromID($sellerID);
        $IdFarm = $this->KapinoUsers->getFarmID($sellerEmail);
        $profile['sessName'] = $this->KapinoUsers->getNameFromEmail($this->session->userdata('username'));
        $profile['userInfo'] = $this->KapinoUsers->getUserInfo($sellerEmail);
        $profile['farmInfo'] = $this->KapinoUsers->getFarmInfo($IdFarm);
        $profile['favInfo'] = $this->KapinoUsers->getFavorites($sellerEmail);
        $profile['prodInfo'] = $this->KapinoUsers->getAdvertisements($sellerEmail);
        $profile['disable'] = 1;
        $this->load->view('profile', $profile);

    }
    public function TheMarketItem() {
        $this->load->model('KapinoUsers');
        $this->load->model('KapinoProducts');
        $sid = session_id();
        $prodInfoString = $this->input->post('prodID');
        $prodInfo = array();
        $prodInfo = explode("_", $prodInfoString);
        $prodID = $prodInfo[0];
        if($sid) {
            $marketData['userInfo'] = $this->KapinoUsers->getNameFromEmail($this->session->userdata('username'));
            $marketData['userFarmID'] = $this->KapinoUsers->getFarmID($this->session->userdata('username'));
            $marketData['isLiked'] = $this->KapinoUsers->isLiked($this->KapinoUsers->getIDFromEmail($this->session->userdata('username')), $prodID);
        }
        else {
            $marketData['userInfo'] = null;
            $marketData['userFarmID'] = null;
        }



        $releaseDate = strtotime($prodInfo[2]);
        $releaseDate = date('F jS, Y', $releaseDate);
        $marketData['userData'] = $this->KapinoUsers->userMarketItem($prodInfo[1]);
        $marketData['releaseDate'] = $releaseDate;
        $marketData['prodData'] = $this->KapinoProducts->productMarketItem($prodID);
        $marketData['rateData'] = $this->KapinoProducts->getAllRatings();
        $marketData['userID'] = $this->KapinoUsers->getIDFromEmail($this->session->userdata('username'));






        $this->load->view('market-item.php', $marketData);
    }

    public function TheLikeAd() {
        $prodID = $this->input->post('prodID');
        $userID = $this->input->post('userID');
        $faveDate = date("Y-m-d");
        $this->load->model('KapinoUsers');

        $queue;
        $status;
        $formData = array(
            'prodID' => $prodID,
            'userID' => $userID,
            'faveDate'=> $faveDate,
        );

        // For Debugging Purposes.
        // var_dump($formData);

        if($this->KapinoUsers->isLiked($userID, $prodID) != null) {
            $queue = $this->KapinoUsers->deleteLike($userID, $prodID);
            $status = 'dislike';
        }
        else {
            $queue = $this->KapinoUsers->addLike($formData);
            $status = 'like';
        }

        //print $this->KapinoUsers->isLiked($userID, $prodID);
        echo json_encode($status);
    }

    public function TheSeller() {
        $this->load->model('KapinoUsers');
        $formData['userInfo'] = $this->KapinoUsers->getNameFromEmail($this->session->userdata('username'));
        $formData['userFarmID'] = $this->KapinoUsers->getFarmID($this->session->userdata('username'));
        $this->load->view('seller.php', $formData);
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
        redirect(site_url('profile'), 'refresh');

    }

    public function TheEditAd() {
        $this->load->model('KapinoUsers');
        $this->load->model('KapinoProducts');

        $formData = array(
            "type" => $this->input->post('typeRadio'),
            "variety" => $this->input->post('varRadio'),
            "price" => $this->input->post('priceRadio'),
            "updateDate" => date("Y-m-d"),
            "prodID" => $this->input->post('prodID'),

        );
        $this->KapinoProducts->editProduct($formData);
        redirect(site_url('profile'), 'refresh');
    }

    public function TheDeleteAd() {
        $this->load->model('KapinoUsers');
        $this->load->model('KapinoProducts');

        $formData = array(
            "prodID" => $this->input->post('prodID')
        );
        var_dump($formData);
        $this->KapinoProducts->deleteProduct($formData);
        redirect(site_url('profile'), 'refresh');

    }

    public function TheLeaveAReview() {
        $this->load->model('KapinoUsers');
        $formData = array(
            "prodID" => $this->input->post('prodID'),
            "rate" => $this->input->post('rate'),
            "feedback" => $this->input->post('feedback'),
            "raterID" => $this->input->post('raterID'),
        );
        $query = $this->KapinoUsers->addReview($formData);
        //redirect(site_url('market'), 'refresh');
        print $query;

    }

    public function TheDashboard() {

       $this->TheUsers();
    }

    public function TheUsers() {
        $this->load->model('KapinoAdmin');
        $AdminUser['userList'] = $this->KapinoAdmin->getAllUsers();
        $AdminUser['activeSellers'] = $this->KapinoAdmin->getActiveSellers();
        $AdminUser['registeredUsers'] = $this->KapinoAdmin->countUsers();
        $AdminUser['bannedUsers'] = $this->KapinoAdmin->getBannedUsers();
        $AdminUser['activeUsers'] = $this->KapinoAdmin->getActiveUsers();
        $AdminUser['regUserList'] = $this->KapinoAdmin->getRegUsersPerMonth();
        $this->load->view('admin-users.php', $AdminUser);
    }

    public function TheSellers() {
        $this->load->model('KapinoAdmin');
        $AdminSeller['activeSellers'] = $this->KapinoAdmin->getActiveSellers();
        $AdminSeller['sellerList'] = $this->KapinoAdmin->getSellersPerMonth();
        $this->load->view('admin-seller.php', $AdminSeller);
    }

    public function TheProducts() {
        $this->load->model('KapinoAdmin');
        $AdminProduct['cTypeOfMonth'] = $this->KapinoAdmin->getCoffeeTypeOfMonth();
        $AdminProduct['cVarOfMonth'] = $this->KapinoAdmin->getCoffeeVarOfMonth();
        $AdminProduct['cTypePerMonth'] = $this->KapinoAdmin->getCoffeeTypePerMonth();
        $AdminProduct['cVarPerMonth'] = $this->KapinoAdmin->getCoffeeVarPerMonth();
        $AdminProduct['cTrend'] = $this->KapinoAdmin->getCoffeeTrendOfYear();
        $this->load->view('admin-products.php', $AdminProduct);
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
