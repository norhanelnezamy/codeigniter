<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* else{
                $this->form_validation->set_message('rule', 'username or password incorrect');
                $this->load->view('login');
            }*/
class Users extends CI_Controller {

    public function index()
    {
        if($this->input->post('submit')){
            $user_id = $this->input->post('user_id');
            $this->db->select('*');
            $this->db->where(array('id'=>$user_id));
            $user = $this->db->get('users')->row();
            echo json_encode($user);


        }
        $this->load->view('users/login');
    }

    public function login()
    {
        $this->form_validation->set_rules(
            array(
                array('field'   => 'username', 'rules'   => 'required'),
                array('field'   => 'password', 'rules'   => 'required')
            ));
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('login');
        }
        else{
            $this->db->select('*');
            $this->db->where(array(
                'username'=>$this->input->post('username'),
                'password'=>$this->input->post('password')
            ));
            $data=$this->db->get('users')->row();
            $this->session->set_userdata($data);
           redirect("posts/index");
        }
    }
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */