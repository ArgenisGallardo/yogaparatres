<?php  



class Home extends CI_Controller
{

	public function index()
	{
		$data = array('title' => 'Yogaparatres');
		
		$this->load->view("/invitado/head", $data);

		$data = array('app' => 'YogaWeb');
		$this->load->view("/invitado/nav", $data);
		$this->load->view("/invitado/header", $data);
		$this->load->view("/invitado/contenido", $data);
		$this->load->view("/invitado/footer", $data);
		


	}
}

/**
 * 
 */
class Portafolio extends CI_Controller
{
	
	public function index()
	{

		$this->load->view("/invitado/portfolioModal1", $data);

	}
}

?>