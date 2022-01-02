<?php class Rental extends CI_Controller
{
	public function index()
	{

		$customer = $this->db->get('customer')->result();
		$data = [
			'customer' => $customer,
		];
		$this->template->load('template/index', 'rental/index', $data);
	}

	public function find_by_id($id = null)
	{
		$data = $this->Member_model->data_member($id)->row();
		echo json_encode($data);
	}
}
?>
