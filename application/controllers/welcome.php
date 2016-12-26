<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->view('header');
		$this->load->view('form');
		$this->load->view('footer');
	}

	public function output(){
		$data = array(
			'nama_depan' => $this->input->post('depan'),
			'nama_belakang' => $this->input->post('belakang'),
			'npm_lu' => $this->input->post('npm'),
			'kelas_lu' => $this->input->post('kelas'),
			'mantan_lu' => $this->input->post('mantan')
			);

			// Show submitted data on view page again.
			$this->load->view('header');
			$this->load->view('view_output', $data);
			$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
