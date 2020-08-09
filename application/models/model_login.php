<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_login extends CI_Model {

	public function ambillogin ($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('login');
		if($query->num_row()=0){
			foreach ($query->result() as $row) {
				$sess = array('username'=> $row->username, 'password' => $row->password);
			}
			$this->session->get_userdata($sess);
			redirect('welcome');
		}
		else{
			$this->session->set_flashdata('info', 'Maaf Username dan Password anda Salah');
			redirect('login');
		}
	}

}
