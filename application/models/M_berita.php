<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_berita extends CI_Model{
    //show all images
 
 
    //insert to database
    function data($number,$offset){
		return $query = $this->db->get('berita',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('berita')->num_rows();
	}
	function update_data($where,$data){
          
        $this->db->update('berita',$data,$where);
    }

 
}