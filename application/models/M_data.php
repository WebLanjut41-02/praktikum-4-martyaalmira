<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model{

	function pendaftaran($data){
		$this->db->insert('siswa',$data);
	}

	function tampil_data(){
		$this->db->get('siswa');
	}
}
?>