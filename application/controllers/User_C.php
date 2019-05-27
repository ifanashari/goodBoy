<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class User_C extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->model('User_M');
            if($this->session->userdata("role") != ""){
                redirect('Dashboard_C','refresh');
            }
        }

        public function index()
        {
            $this->load->view('login-page');
        }

        public function loginAction()
        {
            $login_status = $this->User_M->loginAction();
            if($login_status == true){
                redirect('Dashboard_C','refresh');
            } else{
                redirect('User_C','refresh');
            }
        }
    }
    
    /* End of file User_C.php */
    
?>