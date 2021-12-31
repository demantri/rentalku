<?php class Kendaraan extends CI_Controller
{
	public function index()
	{
		$list = $this->db->get('kendaraan')->result();
		$data = [
			'list' => $list,
		];
		$this->template->load('template/index', 'kendaraan/index', $data);
	}

	public function save()
	{
		$desc = $this->input->post('desc');
		$jenis_kendaraan = $this->input->post('jenis_kendaraan');
		$no_polisi = $this->input->post('no_polisi');
		$warna = $this->input->post('warna');
		$sewa_harian = $this->input->post('sewa_harian');

		$data = [
			'jenis' => $jenis_kendaraan,
			'desc' => ucwords($desc),
			'no_polisi' => ucwords($no_polisi),
			'warna' => ucwords($warna),
			'sewa_harian' => $sewa_harian,
		];
		$this->db->insert('kendaraan', $data);
		redirect('Kendaraan');
	}

	// public function ubah()
	// {
	// 	$id = $this->input->post('id');
	// 	$nama = $this->input->post('nama');
	// 	$alamat = $this->input->post('alamat');
	// 	$no_telp = $this->input->post('no_telp');
	// 	$status = $this->input->post('status');

	// 	$data = [
	// 		'nama' => $nama,
	// 		'alamat' => $alamat,
	// 		'no_telp' => $no_telp,
	// 		'status' => $status,
	// 	];
	// 	$this->db->where('id', $id);
	// 	$this->db->update('customer', $data);
	// 	redirect('Customer');
	// }
}
?>
