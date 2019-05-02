<?php
class Anggota extends CI_Controller {

        public function index(){
                $data['konten'] = 'anggota/tampil';
                $this->load->view('template_petugas',$data);
        }

}