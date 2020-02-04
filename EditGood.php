<?php

Class EditGood extends CI_Controller{





    public function index(){



    $data['result']=$this->GoodModel->showGood();

$data['main_content']='editgood';
$this->load->view('layout/main',$data);


    }



    public function editPage($id){
    	$data['cat_result']=$this->CategoryModel->showCategory();

        $data['result']=$this->GoodModel->showbyId($id);

        $data['main_content']='editthegood';

        $this->load->view('layout/main',$data);



    }


    public function edit($id){

    	if($_SERVER['REQUEST_METHOD']=='POST'){

    		if(isset($_POST['save'])){

    			$data = array('good_name' =>trim($_POST['good_name']) , 'brand_name'=>trim($_POST['brand_name']),'category_name'=>trim($_POST['category_name']),'description'=>trim($_POST['description']) );


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