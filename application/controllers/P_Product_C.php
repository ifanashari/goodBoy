<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class P_Product_C extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            if($this->session->userdata("role") == ""){
                redirect('User_C','refresh');
            }

            $this->load->model('Product_M');
            $this->load->model('Pay_M');
            $this->load->model('User_M');
        }

        public function index()
        {
            $data['content'] = "pay-product-page";
            $data['dataProduct'] = $this->Product_M->getProduct();
            $this->load->view('dashboard-page', $data);
        }

        public function addToCart($id)
        {
            $product = $this->Product_M->getProductById($id);
            $dataCart = array(
                'id'      => $product->id_product,
                'qty'     => 1,
                'price'   => $product->price,
                'name'    => $product->product
            );

            $this->cart->insert($dataCart);
            
            redirect('P_Product_C','refresh');
            
        }

        public function deleteFromCart($id)
        {
            $dataCart = array(
                'rowid'      => $id,
                'qty'     => 0,
            );

            $this->cart->update($dataCart);
            
            redirect('P_Product_C','refresh');
        }

        public function addPProduct()
        {
            $this->Pay_M->addPProduct();
            redirect('P_Product_C','refresh');
        }
        
        public function report()
        {
            $data['dataReport'] = $this->Pay_M->getSalesReport();
            $data['content'] = "sales-report-page";
            $this->load->view('dashboard-page', $data);
        }
    
    }
    
    /* End of file P_Product_C.php */
    
?>