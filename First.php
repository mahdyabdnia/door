<?php 

/**
 * 
 */
class First extends CI_Controller
{
	
	function index(){

        $data['detail']=$this->FirstModel->show();
		$data['main_content']='first';
		$this->load->view('layout/main',$data);




	}

}





?>