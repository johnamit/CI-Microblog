<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller{
    public function index(){
        $this->load->view('Search');
    }

    public function dosearch(){
        $this->load->model('Messages_model');

        $string = $this->input->get('string');

        $data['results'] = $this->Messages_model->searchMessages($string);
        
        $this->load->view('ViewMessages', $data);
    }
}