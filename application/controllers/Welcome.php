<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
        $this->load->database();
		if (!$this->input->get('search')) {
            $this->load->view('welcome_message');
        }
        else {
            $query = $this->db->get_where('phone_number', array('number'=>$this->input->get('search')));
            $data['result'] = $query->result();
            $this->load->view('welcome_message', $data);
        }
	}
}
