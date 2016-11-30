<?php

class Mg_slide extends UserController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_zoom()
    {
        $data = $this->load->view('slide_v', array(), true);
        return $data;
    }
}
