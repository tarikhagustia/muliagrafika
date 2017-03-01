<?php
class Pembayaran extends UserController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
         $data['content'] = 'pembayaran/pemesanan_v';
         $this->templates->get_main_templates($data);
    }
}