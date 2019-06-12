<?php

class CoursModel extends CI_Model {

	public function getAllMat(){
		$query = $this->db->select('*')->from('matiere')->get();

		return $query->result();
	}

	public function getMatById($id){
		$query = $this->db->select('libelle')->from('matiere')->where('id_matiere',$id)->get();

		$query = $query->result();
		return $query[0]->libelle;
	}

	public function getAllProfByMat($id_mat){

		$this->db->select('*');
		$this->db->from('annonce_cours');
		$this->db->join('user', 'user.id_user = annonce_cours.id_prof');
		$this->db->where('id_matiere',$id_mat);
		$query = $this->db->get();

		return $query->result();
	}

	public function annonce($titre,$prix,$id_prof,$id_matiere,$description,$lundi,$mardi,$mercredi,$jeudi,$vendredi,$samedi,$dimanche){

		$data = array(
			'titre' => $titre,
			'prix' => $prix,
			'id_prof' => $id_prof,
			'id_matiere' => $id_matiere,
			'description' => $description,
			'lundi' => $lundi,
			'mardi' => $mardi,
			'mercredi' => $mercredi,
			'jeudi' => $jeudi,
			'vendredi' => $vendredi,
			'samedi' => $samedi,
			'dimanche' => $dimanche

		);

		$this->db->insert('annonce_cours', $data);
	}
}
