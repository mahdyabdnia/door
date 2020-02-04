<?php 




/**
 * 
 */
class GoodModel extends CI_model
{
	
	public function addGood($data){


		return $this->db->insert('good',$data);
	}



	public function showGood(){

      return $this->db->get('good')->result();

	}


	public function showbyId($id){

		$this->db->where('good_id',$id);

		return $this->db->get('good')->result();
	}


	public function updateGood($id,$data){
		$this->db->where('good_id',$id);
		return $this->db->update('good',$data);

    


	}



	public function deleteGood($id){
   $this->db->where('good_id',$id);

   return $this->db->delete('good');


	}


}






?>