<?php
Class Person extends CI_Model
{
	function leftjoin() {
		$sql = "select a.*,b.* from person a left join address b on a.address_id=b.id";
		$query = $this->db->query($sql);
		$data = $query->result_array();
		return $data;
	}
	function innerjoin() {
		$sql = "select a.*,b.* from person a inner join address b on a.address_id=b.id ";
		$query = $this->db->query($sql);
		$data = $query->result_array();
		return $data;
    }
}
?>
