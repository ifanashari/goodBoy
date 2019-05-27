<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Product_M extends CI_Model {
    
        // ===============|=|Category|=|===============

        public function addCategory()
        {
            $data = array(
                "category" => $this->input->post("category")
            );
            $this->db->insert('product_category', $data);
        }

        public function getCategory()
        {
            return $this->db->get('product_category')->result();
        }

        public function saveCategory($id)
        {
            $data = array(
                "category" => $this->input->post("category")
            );
            $this->db->where("id_category", $id)->update('product_category', $data);
        }

        public function deleteCategory($id)
        {   
            $this->db->where("id_category", $id)->delete('product_category');
        }
    
        // ===============|=|Category|=|===============

        // ===============|=|Product|=|===============

        public function addProduct()
        {
            $data = array(
                "product" => $this->input->post("product"),
                "id_category" => $this->input->post("id_category"),
                "price" => $this->input->post("price")
            );
            $this->db->insert('product', $data);
        }

        public function getProduct()
        {
            return $this->db->join("product_category", "product_category.id_category = product.id_category")
                            ->get('product')
                            ->result();
        }

        public function getProductById($id)
        {
            return $this->db->where("id_product", $id)
                            ->join("product_category", "product_category.id_category = product.id_category")
                            ->get('product')
                            ->row();
        }

        public function saveProduct($id)
        {
            $data = array(
                "product" => $this->input->post("product"),
                "id_category" => $this->input->post("id_category"),
                "price" => $this->input->post("price")
            );
            $this->db->where("id_product", $id)->update('product', $data);
        }

        public function deleteProduct($id)
        {   
            $this->db->where("id_product", $id)->delete('product');
        }

        // ===============|=|Product|=|===============

    }
    
    /* End of file Product_M.php */
    
?>