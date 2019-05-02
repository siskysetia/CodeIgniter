<?php
class Angsuran extends CI_Controller {

        public function index(){
                $data['konten'] = 'angsuran/tampil';
                $this->load->view('template_petugas',$data);
        }

}