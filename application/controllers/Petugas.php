<?php
class Petugas extends CI_Controller {

        public function index(){
        		$data['konten'] = 'petugas/tampil';
                $this->load->view('template_petugas',$data);
        }

        public function dashboard(){
        		echo 'Ini adalah dashboard untuk Pendaftar!';
	}

}