<?php class Member_model extends CI_Model
{
	public function data_member($id = '')
	{
		// $where = '';
		// if ($where) {
		// 	$sql .= " WHERE a.id = $id ";
		// }

		$sql = "SELECT a.*, member_id, poin, c.keterangan 
		from customer a
		join detail_member b on a.id = b.id_customer
		join member c on c.id = b.id_detail
		where a.id = $id
		order by a.id asc";
		return $this->db->query($sql);
	}
}
?>
