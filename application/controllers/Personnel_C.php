<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Personnel_C extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->model('User_M');
            if($this->session->userdata("role") == ""){
                redirect('User_C','refresh');
            }
        }

        public function index()
        {
            $data['content'] = "personnel-page";
            $data['dataPersonnel'] = $this->User_M->getPersonnel();
            $this->load->view('dashboard-page', $data);
        }

        public function addPersonnel()
        {
            $this->User_M->addPersonnel();
            redirect('Personnel_C','refresh');
        }

        public function savePersonnel($id)
        {
            $this->User_M->savePersonnel($id);
            redirect('Personnel_C','refresh');
        }

        public function deletePersonnel($id)
        {
            $this->User_M->deletePersonnel($id);
            redirect('Personnel_C','refresh');
        }
    
    }
    
    /* End of file Personnel_C.php */
    
?>