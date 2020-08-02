<?php  
 
 /** 
  */
 class CategoryModel extends CI_model
 {
 	
 	 public  function addCategory($data){
		 return $this->db->insert('category',$data);
		





 	}

 	public function fetch_branch($global_category_id){
 		$this->db->where('global_category_id',$global_category_id);
 		$query=$this->db->get('branch_category');
 		
 		
 		return $query->result();
 	}

 	

 	


 	public function addGloCategory($data){
 		return $this->db->insert('global_category',$data);
 	}


 	public function addBranchCategory($data){
 		return $this->db->insert('branch_category',$data);
 	}



 	public function updateCategory($data,$id){

 		$this->db->where('category_id',$id);
 		 return $this->db->update('category',$data);



 	}


 	public function updateGloCategory($data,$id){
 		$this->db->where('global_category_id',$id);
 		return $this->db->update('global_category',$data);
 	}


 	public function updateBranchCategory($data,$id){
 		$this->db->where('branch_category_id',$id);
 		return $this->db->update('branch_category',$data);
 	}

 	public function showCategory(){

       return $this->db->get('category')->result();



 	}

 	public function showGloCategory(){
 		return $this->db->get('global_category')->result();
 	}

 	public function showbyId($id){



 		$this->db->where('category_id',$id);

 		return $this->db->get('category')->result();
 	}



 	public function deleteCategory($id){

 		$this->db->where('category_id',$id);

 		 return $this->db->delete('category');
 	}




 }











?>