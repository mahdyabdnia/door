<?php

class Category extends CI_Controller{


 public function index()
{
    
$data['main_content']='category';
$this->load->view('category',$data);


}









}








?>