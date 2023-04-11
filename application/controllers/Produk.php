<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function pulihdarikeputusasaan()
    {
        // echo "Judul Buku " . $this->uri->segment('3');

        $this->load->view('baru');
    }
}
