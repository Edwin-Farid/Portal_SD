<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_visi_misi extends CI_Model{
    
    function simpan($where,$data){
          
        $this->db->update('visi_misi',$data,$where);
    }
}