

<?php

class Good extends CI_Controller{


	public function index(){

		$data['main_content']='good';
		$this->load->view('layout/main',$data);




	}
}






















?>