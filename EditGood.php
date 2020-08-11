<?php

Class EditGood extends CI_Controller{
   




    public function index(){



    $data['result']=$this->GoodModel->showGood();

$data['main_content']='editgood';
$this->load->view('layout/main',$data);


    }



    public function editPage($id){
        $data['global_result']=$this->GoodModel->showGlobalCategory();
    

        $data['result']=$this->GoodModel->showGoodById($id);

        $data['main_content']='editthegood';

        $this->load->view('layout/main',$data);



    }


    public function edit($id){

    	if($_SERVER['REQUEST_METHOD']=='POST'){

    		if(isset($_POST['save'])){

    			$data = array('global_category_id'=>trim($_POST['global_category_id']),'branch_category_id'=>trim($_POST['branch_category_id']),'category_id'=>trim($_POST['category_id']),'good_price'=>trim($_POST['good_price']),'good_name' =>trim($_POST['good_name']) , 'brand_name'=>trim($_POST['brand_name']),'description'=>trim($_POST['description']),'seller_name'=>trim($_POST['seller_name']), );


    			if($this->GoodModel->updateGood($id,$data)){

    				redirect('./EditGood');
    			}}
    		if(isset($_POST['cancel'])){

    			redirect('./EditGood');}}}







      public function delete($id){

        if($_SERVER['REQUEST_METHOD']=='POST'){

            if(isset($_POST['del_yes'])){
              if($this->GoodModel->deleteGood($id)){

                redirect('./EditGood');
              }


            }
        }





      }          











}










?>