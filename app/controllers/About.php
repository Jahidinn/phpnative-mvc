<?php 

class About extends Controller{
	public function index($nama = 'Jahidin'){

		$data['nama'] = $nama;
		$data['judul'] = 'About';
		$this->view('template/header', $data);
		$this->view('about/index', $data);
		$this->view('template/footer');

	}
	public function page() {
		$data ['judul'] = 'Page';
		$this->view('template/header', $data);
		$this->view('about/page');
		$this->view('template/footer');

	}
}

?>