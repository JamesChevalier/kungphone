<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller{
	public function index(){
		$this->load->helper('url');
		$this->load->helper('form');
		$pagename = array('pagename' => 'Contact', 'didcontact' => '');
		$this->load->view('header');
		$this->load->view('contact', $pagename);
		$this->load->view('footer');
	}
	
	function message()
	{
		$config['protocol'] = "smtp";
		$config['_smtp_auth']   = TRUE;
		$config['smtp_host'] = "ssl://smtp.googlemail.com";
		$config['smtp_user'] = "contactform@kungphone.net";
		$config['smtp_pass'] = "JarHjDfU855zM*x";
		$config['smtp_port'] = 465;
		$config['wordwrap'] = FALSE;
		$config['mailtype'] = "text";
		$config['priority'] = 3;
		$config['newline'] = "\r\n";
		$this->load->library('email', $config);
		$data = array( 
			'name' => $this->security->xss_clean($this->input->post('name')),
			'email' => $this->security->xss_clean($this->input->post('email')),
			'message' => $this->security->xss_clean($this->input->post('message')),
		);
		$this->email->from($data['email'], $data['name']);
		$this->email->to('jim@kungphone.net');
		$this->email->subject('Contact From Site');
		$this->email->message($data['message']);
		$this->email->send();
		redirect('/contact/thanks','refresh');
	}

	function thanks()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$pagename = array(
			'didcontact' => 'Thanks!'
		);
		$this->load->view('header');
		$this->load->view('contact', $pagename);
		$this->load->view('footer');
	}


}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */