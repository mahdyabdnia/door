<?php


Class EditCategory extends CI_Controller{

    public function index(){


    $data['result']=$this->CategoryModel->showCategory();	

     $data['main_content']='editcategory';

     $this->load->view('layout/main',$data);
        


    }


    public function editPage(){

    	$data['main_content']='editthecat';
    	$this->load->view('layout/main',$data);





    }


    public function edit(){


    	
    }






}












?>