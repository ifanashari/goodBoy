<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Product_C extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            
            if($this->session->userdata("role") == ""){
                redirect('User_C','refresh');
            }
            
            $this->load->model('Product_M');
            $this->load->model('User_M');
        }    

        public function index()
        {
            $data['content'] = "product-page";
            $data['dataCategory'] = $this->Product_M->getCategory();
            $data['dataProduct'] = $this->Product_M->getProduct();
            $this->load->view('dashboard-page', $data);
        }

        // ===============|=|Category|=|===============

        public function addCategory()
        {
            $this->Product_M->addCategory();
            redirect('Product_C','refresh');
        }

        public function saveCategory($id)
        {
            $this->Product_M->saveCategory($id);
            redirect('Product_C','refresh');
        }

        public function deleteCategory($id)
        {
            $this->Product_M->deleteCategory($id);
            redirect('Product_C','refresh');
        }
        
        // ===============|=|Category|=|===============

        // ===============|=|Product|=|===============

        public function addProduct()
        {
            $this->Product_M->addProduct();
            redirect('Product_C','refresh');
        }

        public function saveProduct($id)
        {
            $this->Product_M->saveProduct($id);
            redirect('Product_C','refresh');
        }

        public function deleteProduct($id)
        {
            $this->Product_M->deleteProduct($id);
            redirect('Product_C','refresh');
        }
        
        // ===============|=|Product|=|===============
    
    }
    
    /* End of file Product_C.php */
    
?>