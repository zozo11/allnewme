<?php 
	/**
	* integration bootstrap file
	*/
	class boots extends CI_controller
	{
		
		public function getBoots()
		{
			$this->load->view('samplebootstrap');
		}
	}

?>