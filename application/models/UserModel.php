<?php

class UserModel extends CI_Model {

	public function getUniv(){
		$query = $this->db->select('*')->from('university')->get();

		return $query->result();
	}

	public function createUser($username,$nom,$prenom,$mdp,$univ,$mail){
		$data = array(
			'username' => $username,
			'nom' => $nom,
			'prenom' => $prenom,
			'password' => $mdp,
			'id_univ' => $univ,
			'mail' => $mail
		);

		$this->db->insert('user', $data);
	}


	public function checkUsername($username){
		$this->db->select('username');
		$this->db->from('user');
		$this->db->where('username',$username);
		$query=$this->db->get();

		$num = $query->num_rows();

		if($num>0)
			return false;

		return true;

	}

	public function checkMail($mail){
		$this->db->select('mail');
		$this->db->from('user');
		$this->db->where('mail',$mail);
		$query=$this->db->get();

		$num = $query->num_rows();

		if($num>0)
			return false;

		return true;

	}

}