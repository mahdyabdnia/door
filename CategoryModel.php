<?php 
 
 /**
  * 
  */
 class CategoryModel extends CI_model
 {
 	
 	 public  function addCategory($data){
 		return $this->db->insert('category',$data);





 	}



 	public function updateCategory($data,$id){

 		$this->db->where('category_id',$id);
 		 return $this->db->update('category',$data);



 	}

 	public function showCategory(){

       return $this->db->get('category')->result();



 	}

 	public function showbyId($id){



 		$this->db->where('category_id',$id);

 		return $this->db->get('category')->result();
 	}




 }











?>