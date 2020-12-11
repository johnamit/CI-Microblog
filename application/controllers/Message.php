<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller{
    public function index(){
        if($this->session->userdata('username') == NULL){
            redirect('user/login');
        }
        else{
            $this->load->view('Post');
        }
    }

    public function dopost(){
        if($this->session->userdata('username') == NULL){
            redirect('user/login');
        }
        else{
            $this->load->model('Messages_model');

            $user = $this->session->userdata('username');
            $message = $this->input->post('newpost');
            $this->Messages_model->insertMessage($user,$message);

            redirect('user/view/'.$user);
        }
    }    
}