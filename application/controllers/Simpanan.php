<?php
class Simpanan extends CI_Controller {

        public function index(){
                $data['konten'] = 'simpanan/tampil';
                $this->load->view('template_petugas',$data);
        }

}