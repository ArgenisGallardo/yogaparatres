<?php 

class Conferencias extends CI_Controller
{

	public function index()
	{
		$data = array('title' => 'Yogaparatres');
		$this->load->view("/invitado/conferencias", $data);
			
	}
}


?>
