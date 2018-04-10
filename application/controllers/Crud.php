<?php


class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url_helper');
		$this->load->database();
	}

	function index(){
		$data['users'] = $this->m_data->tampil_data();

		$this->load->view('v_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_input');
	}

	function tambah_aksi(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$subject = $this->input->post('subject');
        $message = $this->input->post('message');

		$data = array(
			'name' => $name,
			'email' => $email,
			'subject' => $subject,
			'message' => $message
			);
		$this->m_data->input_data($data,'users');
		redirect('crud/index');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'users');
		redirect('crud/index');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['users'] = $this->m_data->edit_data($where,'users')->result();
		$this->load->view('v_edit',$data);
	}

    function update(){
	    $id = $this->input->post('id');
	    $name = $this->input->post('name');
	    $email = $this->input->post('email');
	    $subject = $this->input->post('subject');
        $messageS = $this->input->post('message');

        $data = array(
	        'name' => $name,
		    'email' => $email,
		    'subject' => $subject,
            'message' => $message
	    );

	    $where = array(
		    'id' => $id
	    );

	    $this->m_data->update_data($where,$data,'$users');
	    redirect('crud/index');
    }

}
?>
