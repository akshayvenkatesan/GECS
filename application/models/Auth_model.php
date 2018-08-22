<?php
	
	/* 
		* To change this license header, choose License Headers in Project Properties.
		* To change this template file, choose Tools | Templates
		* and open the template in the editor.
	*/
	
	class Auth_model extends CI_Model
	{
		public function __construct() 
		{
			
			parent::__construct();
			
		}
		
		function getUser(){
			
			$this->db->select('*');
			$this->db->from('fakeuser');
			
			$query=$this->db->get();
			return $query;
			
		}
		
		function getStates()
        {
            /*
				$query = $this->db->get('location');
				
				foreach ($query->result() as $row)
				{
                echo $row->description;
			}*/
			
            $query = $this->db->query('SELECT `state code` as sc,`State Name(In English)` as sn FROM dhigecs_states');
			
            foreach ($query->result() as $row)
            {
                echo $row->description;
			}
        }
			
			public function get_all_states()
			{
				$query = $this->db->query('SELECT `state code` as sc,`State Name(In English)` as sn FROM dhigecs_states');
				return $query->result_array();
			}
			
            //echo 'Total Results: ' . $query->num_rows();
		
                
                 public function find_name($bid)
  {
   $q=$this->db->select(['Name'])
            ->where('Id',$bid)
            ->get('fakeuser');
            return $q->row();
  }

   public function find_id($bid)
  {
   $q=$this->db->select(['BId'])
            ->where('Id',$bid)
            ->get('fakeuser');
            return $q->row();
  }
  
  }
