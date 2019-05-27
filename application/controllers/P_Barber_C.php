<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class P_Barber_C extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            if($this->session->userdata("role") == ""){
                redirect('User_C','refresh');
            }

            $this->load->model('User_M');
            $this->load->model('Pay_M');
        }

        public function index()
        {
            $data['content'] = "pay-barber-page";
            $data['dataBarberPersonnel'] = $this->User_M->getBarberP();
            $data['dataBarber'] = $this->Pay_M->getBarber();
            $this->load->view('dashboard-page', $data);
        }

        public function addPBarber()
        {
            $this->Pay_M->addPBarber();
            redirect('P_Barber_C','refresh');
        }

        public function report($id)
        {
            $data['dataReport'] = $this->Pay_M->getBarberReportById($id);
            $data['content'] = "barber-report-page";
            $this->load->view('dashboard-page', $data);
        }
    
    }
    
    /* End of file P_Barber_C.php */
    
?>