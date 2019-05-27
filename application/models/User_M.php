<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class User_M extends CI_Model {
    
        public function loginAction(){
            if($this->input->post('submit')){
                $this->form_validation->set_rules('username', 'username', 'trim|required');   
                $this->form_validation->set_rules('password', 'password', 'trim|required');   
                
                
                if ($this->form_validation->run() == TRUE) {
                    $username = $this->input->post('username');
                    $password = $this->input->post('password');
                    $data_user = array(
                        'username'=>base64_encode($username),
                        'password'=>base64_encode($password)
                    );
                    $data_checker = $this->db->get_where('user', $data_user);
                    $get_data_user = $data_checker->row();
                    if($data_checker->num_rows() > 0){
                        $array = array(
                            'id' => $get_data_user->id,
                            'name' => $get_data_user->name,
                            'username' => $get_data_user->username,
                            'password' => $get_data_user->password,
                            'role' => $get_data_user->role,
                        );
                        
                        $this->session->set_userdata( $array );
                        return true;
                    } else{
                        return false;
                    }
                } else {
                    return false;
                }
            } else{
                return false;
            }
        }

        public function addPersonnel()
        {
            $data = array(
                "name" => $this->input->post("name"),
                "username" => base64_encode($this->input->post("username")),
                "password" => base64_encode($this->input->post("password")),
                "role" => $this->input->post("role"),
            );
            $this->db->insert('user', $data);
        }

        public function getPersonnel()
        {
            return $this->db->query("SELECT * FROM `user` WHERE USER.role != 'boss'")
                            ->result();
        }

        public function getBarberP()
        {
            return $this->db->where("role", "barber")
                            ->get("user")
                            ->result();
        }

        public function savePersonnel($id)
        {
            $data = array(
                "name" => $this->input->post("name"),
                "username" => base64_encode($this->input->post("username")),
                "password" => base64_encode($this->input->post("password")),
                "role" => $this->input->post("role"),
            );
            $this->db->where("id", $id)->update('user', $data);
        }

        public function deletePersonnel($id)
        {   
            $this->db->where("id", $id)->delete('user');
        }
    
    }
    
    /* End of file User_M.php */
    
?>