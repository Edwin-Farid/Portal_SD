<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_sejarah extends CI_Model{
    
    function simpan($where,$data){
          
        $this->db->update('sejarah',$data,$where);
    }
}