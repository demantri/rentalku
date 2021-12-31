<?php class Customer extends CI_Controller
{
	public function index()
	{
		$list = $this->db->get('customer')->result();
		$data = [
			'list' => $list,
		];
		$this->template->load('template/index', 'customer/index', $data);
	}

	public function save()
	{
		$no_identitas = $this->input->post('no_identitas');
		$jenis_identitas = $this->input->post('jenis_identitas');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');

		$data = [
			'no_identitas' => $no_identitas,
			'jenis_identitas' => $jenis_identitas,
			'nama' => $nama,
			'alamat' => $alamat,
			'no_telp' => $no_telp,
		];
		$this->db->insert('customer', $data);
		redirect('Customer');
	}

	public function ubah()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$status = $this->input->post('status');

		$data = [
			'nama' => $nama,
			'alamat' => $alamat,
			'no_telp' => $no_telp,
			'status' => $status,
		];
		$this->db->where('id', $id);
		$this->db->update('customer', $data);
		redirect('Customer');
	}
}
?>
