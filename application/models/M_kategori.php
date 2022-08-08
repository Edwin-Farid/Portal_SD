<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_kategori extends CI_Model{
    
    function update($where,$data){
          
        $this->db->update('kategori',$data,$where);
    }
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
   
  function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
}
 
}