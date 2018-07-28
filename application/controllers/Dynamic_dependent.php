<?php

class Dynamic_dependent extends CI_Controller {
 
 public function __construct()
 {
  parent::__construct();
  $this->load->model('dynamic_dependent_model');
 }

 function index()
 {
  $data['state'] = $this->dynamic_dependent_model->fetch_state();
  $this->load->view('registration', $data);
 }

 function fetch_city()
 {
  if($this->input->post('state_id'))
  {
   echo $this->dynamic_dependent_model->fetch_city($this->input->post('state_id'));
  }
 }
  
}


