<?php

class Mg_nav extends UserController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_nav()
    {
        $data = $this->load->view('nav_v', [], true);

        return $data;
    }
}
