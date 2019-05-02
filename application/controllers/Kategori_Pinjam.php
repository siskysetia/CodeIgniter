<?php
class Kategori_Pinjam extends CI_Controller {

        public function index(){
        		$data['konten'] = 'kategori_pinjam/tampil';
                $this->load->view('template_petugas',$data);
        }
}