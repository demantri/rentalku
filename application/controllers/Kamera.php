<?php class Kamera extends CI_Controller
{
	public function index()
	{
		$list = $this->db->get('kamera')->result();
		$data = [
			'list' => $list,
		];
		$this->template->load('template/index', 'kamera/index', $data);
	}

	public function save()
	{
		$desc = $this->input->post('desc');
		$sewa_harian = $this->input->post('sewa_harian');

		$data = [
			'desc' => ucwords($desc),
			'sewa_harian' => $sewa_harian,
		];
		$this->db->insert('kamera', $data);
		redirect('Kamera');
	}

	public function find_by_id($id)
	{
		$this->db->where('id', $id);
		$data = $this->db->get('kamera')->row();
		echo json_encode($data);
	}

	public function ubah()
	{
		$id = $this->input->post('id');
		$desc = $this->input->post('desc');
		$sewa_harian = $this->input->post('sewa_harian');
		
		$data = [
			'desc' => ucwords($desc),
			'sewa_harian' => $sewa_harian,
		];

		$this->db->where('id', $id);
		$this->db->update('kamera', $data);
		redirect('Kamera');
	}
}
?>
