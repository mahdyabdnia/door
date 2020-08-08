 

<?php

class Good extends CI_Controller{


	public function index(){



		$data['global_result']=$this->GoodModel->showGlobalCategory();

		$data['main_content']='good';
		$this->load->view('layout/main',$data);




	}


      public fetch_branch(){
            $global_category_id=$this->input->post('global_category_id',TRUE);
            $data=$this->GoodModel->showBranchByGlobalCategoryId($global_category_id);
            echo json_encode($data);
      }


      public fetch_category(){
            $branch_category_id=$this->input->post('branch_category_id',TRUE);
            $data=$this->GoodModel->showCategoryByBranchCategoryId($branch_category_id);
            echo json_encode($data);
      }




	public function addGood(){
		if($_SERVER['REQUEST_METHOD']=="POST"){
            if(isset($_POST['save_end'])){
            	$data = array('good_price'=>trim($_POST['good_price']),'good_name' => trim($_POST['good_name']), 'brand_name'=>trim($_POST['brand_name']),'category_name'=>trim($_POST['category_name']),'description'=>trim($_POST['desc']));

            	if($this->GoodModel->addGood($data)){

            		redirect('./First');
            	}




            }

            if(isset($_POST['save_next'])){
            	$data = array('good_price'=>trim($_POST['good_price']),'good_name' => trim($_POST['good_name']), 'brand_name'=>trim($_POST['brand_name']),'category_name'=>trim($_POST['category_name']),'description'=>trim($_POST['desc']));

            	if($this->GoodModel->addGood($data)){

            		redirect('./Good');
            	}




            }



		}





	}





	//public function upload(){



	//}
}






















?>