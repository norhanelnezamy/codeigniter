<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {

    public function index()
    {
        $user_id = $this->session->userdata('id');
        $this->db->select('*');
        $this->db->where('user_id',$user_id);
        $posts['data']= $this->db->get('posts')->result();
        $this->load->view('posts/index', $posts);
    }
    public function delete($id){
        $this->db->delete('posts',array('id'=> $id));
        redirect('posts');
    }
    public function action($id){
       // echo "sdsd"; die;
        $value['post_id']=$id;
        if($this->input->post('submit')){
           $data['description']=$this->input->post('new_description');
           $user_id=$this->session->userdata('id');
           $this->db->where(array('id'=>$id));
            $this->db->update('posts',$data);
            redirect("posts");

        }

        $this->load->view('posts/update',$value);
    }
    public function update($id){
        $new_description = $this->input->post('new_description');
        $this->db->where('id',$id);
        $this->update('posts',$new_description);
        redirect('posts/index');
    }
    public function newpost(){
        $this->load->view('posts/addpost');
    }

    public function addpost(){
        $user_id = $this->session->userdata('id');
        $new_post = $this->input->post('new_post');
        $insert_data=array(
            'description'=>$new_post,
            'user_id'=>$user_id
        );
       $q= $this->db->insert('posts',$insert_data); //var_dump($q);
       redirect('posts/index');

    }

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */