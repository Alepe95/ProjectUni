<?php

class ManuelModel extends CI_Model {

	public function getAllMat(){
		$query = $this->db->select('*')->from('matiere')->get();

		return $query->result();
	}

	public function venteManuel($titre,$prix,$id_vendeur,$id_type,$image,$description,$annee_edition,$editeur,$auteur,$id_matiere){

		$date = date("Y-m-d");

		$data = array(
			'titre' => $titre,
			'prix' => $prix,
			'id_vendeur' => $id_vendeur,
			'id_type' => $id_type,
			'id_etat' => 1,
			'date_annonce' => $date,
			'image' => $image,
			'description' => $description,
			'annee_edition' => $annee_edition,
			'editeur' => $editeur,
			'auteur' => $auteur,
			'id_matiere' => $id_matiere
		);

		$this->db->insert('support', $data);
	}


	public function getListeManuelDispo(){
		$query = $this->db->select('*')->from('support')->where('id_etat',1)->get();

		return $query->result();
	}


}
