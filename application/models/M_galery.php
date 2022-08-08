<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_galery extends CI_Model{
    
    function update_data($where,$data){
          
        $this->db->update('galery',$data,$where);
    }
}