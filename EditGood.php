<?php

Class EditGood extends CI_Controller{





    public function index(){



    $data['result']=$this->GoodModel->showGood();

$data['main_content']='editgood';
$this->load->view('layout/main',$data);


    }



    public function editPage($id){

        $data['result']=$this->GoodModel->showbyId($id);

        $data['main_content']='editthegood';

        $this->load->view('layout/main',$data);



    }
}










?>