<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_dana_bos extends CI_Model{
    function update_data($where,$data){
          
        $this->db->update('dana_bos',$data,$where);
    }
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
   
  function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
}
 
}