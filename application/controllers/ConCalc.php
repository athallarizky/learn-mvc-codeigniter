<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConCalc extends CI_Controller {
	function __construct(){
		parent::__construct();
		
		//load model ModelCalc
		$this->load->model('ModelCalc');
    }
	
	public function index()
	{
		//panggil fungsi operationList() pada model ModelCalc dan simpan pada variabel
		$data['operators'] = $this->ModelCalc->operationList();
		$this->load->view('main_calc', $data); //ubah agar dapat mengirim variabel hasil ke view
	}
	
	public function hitung(){
		//ambil value inputan dan simpan di variabel
		$c = '';
		$data = array(
			'angka1' => $this->input->post('satu'),
			'angka2' => $this->input->post('dua'),
			'operator' => $this->input->post('operator')
		);

		if($data["operator"] == "tambah") $data["operator"]="+";
		if($data["operator"] == "kali") $data["operator"]="*";
		if($data["operator"] == "bagi") $data["operator"]="/";
		if($data["operator"] == "kurang") $data["operator"]="-";

		//panggil fungsi counting() pada model ModelMate dan simpan pada variabel (perhatikan parameter fungsi)
		$data['result'] = $this->ModelCalc->counting($data["angka1"],$data["angka2"],$data["operator"]);

		//load view res_calc dan buat agar dapat mengirim variabel inputan dan hasil ke view
		$this->load->view('res_calc', $data);
	}
}
