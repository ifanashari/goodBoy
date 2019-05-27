<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Dashboard_C extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            if($this->session->userdata("role") == ""){
                redirect('User_C','refresh');
            }

            $this->load->model('Pay_M');
            $this->load->model('User_M');
            
        }

        public function index()
        {
            $data['content'] = "home-page";
            // $data['dataBarber'] = $this->User_M->getBarberP();
            $this->load->view('dashboard-page', $data);
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect('User_C','refresh');
        }
    
    }
    
    /* End of file Dashboard_C.php */
    
?>