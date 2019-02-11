<?php 

class Capacitaciones extends CI_Controller
{

	public function index()
	{
		$data = array('title' => 'Yogaparatres');
		$this->load->view("/invitado/capacitaciones", $data);
			
	}
}


?>
