

<?php

class Good extends CI_Controller{


	public function index(){



		$data['cat_result']=$this->CategoryModel->showCategory();

		$data['main_content']='good';
		$this->load->view('layout/main',$data);




	}




	public function addGood(){
		if($_SERVER['REQUEST_METHOD']=="POST"){
            if(isset($_POST['save_end'])){
            	$data = array('good_name' => trim($_POST['good_name']), 'brand_name'=>trim($_POST['brand_name']),'category_name'=>trim($_POST['category_name']),'description'=>trim($_POST['desc']));

            	if($this->GoodModel->addGood($data)){

            		redirect('./First');
            	}




            }

		}





	}





	//public function upload(){



	//}
}






















?>