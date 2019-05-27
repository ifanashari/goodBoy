<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Pay_M extends CI_Model {
    
        // ===============|=|Barber|=|===============

        public function addPBarber()
        {
            $data = array(
                "cashier" => $this->session->userdata("name"),
                "name" => $this->input->post("name"),
                "id_user" => $this->input->post("id_user"),
                "total" => ($this->input->post("price") + $this->input->post("extra"))
            );
            $this->db->insert('barber', $data);
        }
        
        public function getBarber()
        {
            return $this->db->join("user", "user.id = barber.id_user")
                            ->get("barber")
                            ->result();
        }

        public function getBarberReportById($id)
        {
            return $this->db->where("id_user", $id)
                            ->join("user", "user.id = barber.id_user")
                            ->get("barber")
                            ->result();
        }

        // ===============|=|Barber|=|===============

        // ===============|=|Product|=|===============

        public function addPProduct()
        {
            foreach($this->cart->contents() as $item){
                $data = array(
                    "cashier" => $this->session->userdata("name"),
                    "name" => $this->input->post("name"),
                    "id_product" => $item["id"],
                    "qty" => $item["qty"],
                    "total" => $item["subtotal"]
                );
                $this->db->insert('sales', $data);
            }

            foreach($this->cart->contents() as $itemReset){
                $dataCart = array(
                    'rowid'      => $itemReset["rowid"],
                    'qty'     => 0,
                );
    
                $this->cart->update($dataCart);
            }
        }

        public function getSalesReport()
        {
            return $this->db->join("product", "product.id_product = sales.id_product")
                            ->get('sales')
                            ->result();
        }

        // ===============|=|Product|=|===============
    }
    
    /* End of file Pay_M.php */
    
?>