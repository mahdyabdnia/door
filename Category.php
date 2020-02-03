<?php

class Category extends CI_Controller{


 public function index()
{
    
$data['main_content']='category';
$this->load->view('layout/main',$data);


}


public function addCategory(){
	if ($_SERVER['REQUEST_METHOD']=="POST") {
		

		if(isset($_POST['add-cat-end'])){
			$data = array('category_name' => trim($_POST['cat-name']),'global-category'=>trim($_POST['global-cat']),'branch-category'=>trim($_POST['branch-name']) );

			if($this->CategoryModel->addCategory($data)){

				redirect('./First');
			}



		}
	}



}











}








?>