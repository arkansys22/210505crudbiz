<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Daftar extends CI_Controller {

    function __construct()
  {
    parent::__construct();
    /* memanggil model untuk ditampilkan pada masing2 modul */
    $this->load->model(array('Crud_m'));
    /* memanggil function dari masing2 model yang akan digunakan */
  }

  public function index()
	{


    if ($this->uri->segment('4')==''){
      $dari = 0;
    }else{
      $dari = $this->uri->segment('4');
    }

    if (is_numeric($dari)) {
			$config['per_page'] = 30;
			$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
			$data['posts_paketharga']= $this->Crud_m->view_one_limit('paketharga','paketharga_status','paketharga_id','ASC',$dari,$config['per_page']);

    }else{
			redirect('main');
		}
		$this->load->view('fronts/daftar/index',$data);
  }


}
