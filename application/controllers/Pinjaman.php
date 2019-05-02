<?php
class Pinjaman extends CI_Controller {

        public function index(){
                $data['konten'] = 'pinjaman/tampil';
                $this->load->view('template_petugas',$data);
        }

}