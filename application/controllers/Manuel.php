<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manuel extends CI_Controller {

	public function vendre(){
		$this->load->model('ManuelModel');
		$data = array();

		if($_POST){


			$titre = $this->input->post('titre');
			$theme = $this->input->post('theme');
			$anneeEdit = $this->input->post('anneeEdit');
			$auteur = $this->input->post('auteur');
			$editeur = $this->input->post('editeur');
			$description = $this->input->post('description');
			$prix = $this->input->post('prix');
			$photo = "";

			if (!empty($_FILES['photo']['name'])) {
				// Set preference
				$config['upload_path'] = 'uploads/manuel';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['max_size'] = '200000'; // max_size in kb
				$config['file_name'] = genererChaineAleatoire();

				// Load upload library
				$this->load->library('upload', $config);

				if($this->upload->do_upload('photo')){
					// Get data about the file
					$uploadData = $this->upload->data();
					$data['file'] = $uploadData['file_name'];

					$data['photoChanged'] = 'OK';
				}else{
					$data['photoChanged'] = ' pas OK';
				}

			}

			if($this->input->post('type') == 1){

				$this->ManuelModel->venteManuel($titre,$prix,$this->session->id,1,$data['file'],$description,$anneeEdit,$editeur,$auteur,$theme);

			}elseif ($this->input->post('type')== 2){
				$duree = $this->input->post('dureePret');

			}

		}

		if ($this->session->has_userdata('id')) {
			$data['mat'] = $this->ManuelModel->getAllMat();
			$this->layout->set_titre('Vente');
			$this->layout->ajouter_js('vente');
			$this->layout->view('Manuel/vente',$data);
		}else {
			redirect('/Welcome/connexion', 'refresh');
		}
	}


	public function liste(){
		$this->load->model('ManuelModel');
		$data = array();

		if ($this->session->has_userdata('id')) {
			$data['liste'] = $this->ManuelModel->getListeManuelDispo();
			$this->layout->set_titre('Liste manuels');

			$this->layout->view('Manuel/liste',$data);

		}else{
			redirect('/Welcome/connexion', 'refresh');
		}

	}
}
