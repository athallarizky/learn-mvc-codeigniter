<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConFest extends CI_Controller {
	function __construct(){
        parent::__construct();
		//load model ModelFest
		$this->load->model('ModelFest');
    }
	
	public function index()
	{
		//panggil fungsi festival() pada model ModelFest dan simpan pada variabel
		$data['fests'] = $this->ModelFest->festival();
		$this->load->view('main_fest', $data); //ubah agar dapat mengirim variabel hasil ke view
	}
	
	public function lineup(){
		//ambil value dari url dan simpan di variabel (dapat mengunakan parameter atau lainya)
		$last = $this->uri->total_segments();
		$siteURL = $this->uri->segment($last);
		//panggil fungsi festName() pada model ModelFest dan simpan pada variabel (perhatikan parameter fungsi)
		$data['festname'] = $this->ModelFest->festname($siteURL);
		//panggil fungsi lineup() pada model ModelFest dan simpan pada variabel (perhatikan parameter fungsi)
		$data['lineups']   = $this->ModelFest->lineup($siteURL);
		//load view fest_lineup dan buat agar dapat mengirim variabel inputan dan hasil ke view
		$this->load->view('fest_lineup', $data);
	}
}
