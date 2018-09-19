<?php
class M_public extends CI_Model {	

	
	function get_all_peserta() {
		$data= $this->db->query("CALL select_by_tgl_lahir()")->result_array();
		return $data;
	}
	
	function insert_data($data) {
			$this->db->insert('peserta',$data);	
	}

	
}
?>
