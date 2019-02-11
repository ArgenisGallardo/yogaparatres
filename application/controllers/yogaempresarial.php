<?php 

class Yogaempresarial extends CI_Controller
{

	public function index()
	{
		$data = array('title' => 'Yogaparatres');
		$this->load->view("/invitado/yogaempresarial", $data);
			
	}
}


?>

