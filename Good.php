

<?php

class Good extends CI_Controller{


	public function index(){



		$data['cat_result']=$this->CategoryModel->showCategory();

		$data['main_content']='good';
		$this->load->view('layout/main',$data);




	}
}






















?>