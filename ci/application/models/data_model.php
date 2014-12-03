<?php

class Data_model extends CI_Model {

	function getAll(){
		$sql = "SELECT title, author, contents FROM data WHERE id =?";
		$q = $this->db->query($sql, 2);
		
		if($q->num_rows() > 0) {
			foreach($q->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
}

