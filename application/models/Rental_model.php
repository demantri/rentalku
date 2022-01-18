<?php class Rental_model extends CI_Model
{
	public function get_rental($jenis)
	{
		if ($jenis == 'kamera') {
			$this->db->where('status', 1);
			$this->db->order_by('desc', 'asc');
			$query = $this->db->get('kamera');
		} else {
			$this->db->where('status', 1);
			$this->db->order_by('desc', 'asc');
			$query = $this->db->get('kendaraan');
		}
		$output = '<option value="">Pilih</option>';
		foreach ($query->result() as $row) {
			$output .= '<option value="' . $row->id . '">' . $row->desc . '</option>';
		}
		return $output;
		
	}

	public function get_data($id, $jenis)
	{
		if ($jenis == 'kamera') {
			$this->db->where('status', 1);
			$this->db->where('id', $id);
			$this->db->order_by('desc', 'asc');
			$query = $this->db->get('kamera')->row();
		} else {
			$this->db->where('status', 1);
			$this->db->where('id', $id);
			$this->db->order_by('desc', 'asc');
			$query = $this->db->get('kendaraan')->row();
		}
		return $query;
	}
}
?>
