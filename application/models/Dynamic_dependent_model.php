<?php
class Dynamic_dependent_model extends CI_Model
{
 function fetch_state()
 {
  $this->db->order_by("state_name", "ASC");
  $query = $this->db->get("dbt_state");
  return $query->result();
 }

 function fetch_city($state_id)
 {
  $this->db->where('state_code', $state_id);
  $this->db->order_by('district_name', 'ASC');
  $query = $this->db->get('dbt_district');
  $output = '<option value="">Select city</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->district_code.'">'.$row->district_name.'</option>';
  }
  return $output;
 }

// function fetch_city($state_id)
// {
//  $this->db->where('state_id', $state_id);
//  $this->db->order_by('city_name', 'ASC');
//  $query = $this->db->get('city');
//  $output = '<option value="">Select City</option>';
//  foreach($query->result() as $row)
//  {
//   $output .= '<option value="'.$row->city_id.'">'.$row->city_name.'</option>';
//  }
//  return $output;
// }
//}

}