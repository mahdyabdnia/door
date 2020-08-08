<?php 

class Category extends CI_Controller{


 public function index()
{
    
$data['main_content']='category';
$data['glo_cat']=$this->CategoryModel->showGloCategory();
$data['global_result']=$this->CategoryModel->showGlobalCategory();
$this->load->view('layout/main',$data);

 
}


public function fetch_branch(){
	$global_category_id=$this->input->post('global_category_id',TRUE);
	$data=$this->CategoryModel->showBracnchByGlobalCategoryId($global_category_id)->result();
	echo json_encode($data);
}






public function addGloCategory(){


	if ($_SERVER['REQUEST_METHOD']=="POST") {
		

		if(isset($_POST['add-glocat-end'])){
			$data = array('global_category'=>trim($_POST['global-cat-glo']) );

			if($this->CategoryModel->addGloCategory($data)){

				redirect('./First');
			}



		}




		elseif (isset($_POST['add-glocat-next'])) {

			$data = array('global_category'=>trim($_POST['global-cat-glo']));

			if($this->CategoryModel->addGloCategory($data)){

				redirect('./Category');
			}
			
		}


		elseif (isset($_POST['cancel'])) {
			redirect('./First');
		}



	}

}

public function addCategory(){
	if ($_SERVER['REQUEST_METHOD']=="POST") {
		

		if(isset($_POST['add-cat-end'])){
			$data = array('category_name' => trim($_POST['cat-name']),'global_category_id'=>trim($_POST['global-cat']),'branch_category_id'=>trim($_POST['branch-name']) );

			if($this->CategoryModel->addCategory($data)){

				redirect('./First');
			}



		}




		elseif (isset($_POST['add-cat-next'])) {

			$data = array('category_name' => trim($_POST['cat-name']),'global_category_id'=>trim($_POST['global-cat']),'branch_category_id'=>trim($_POST['branch-name']) );

			if($this->CategoryModel->addCategory($data)){

				redirect('./Category');
			}
			
		}


		elseif (isset($_POST['cancel'])) {
			redirect('./First');
		}



	}



}


public function addBranchCategory(){

if ($_SERVER['REQUEST_METHOD']=="POST") {
		

		if(isset($_POST['add-brancat-end'])){
			
			$data = array('global_category_id'=>trim($_POST['global-cat-branch']),'branch_category'=>trim($_POST['branch-name-branch']) );

			if($this->CategoryModel->addBranchCategory($data)){

				redirect('./First');
			}



		}




		elseif (isset($_POST['add-brancat-next'])) {

			$data = array('global_category_id'=>trim($_POST['global-cat-branch']),'branch_category'=>trim($_POST['branch-name-branch']) );

			if($this->CategoryModel->addBranchCategory($data)){

				redirect('./Category');
			}
			
		}


		elseif (isset($_POST['cancel'])) {
			redirect('./First');
		}



	}

}













}








?>