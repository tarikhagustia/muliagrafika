<?php

(defined('BASEPATH')) or exit('No direct script access allowed');
class Templates extends TemplatesController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
    }
    public function get_main_templates($data)
    {
        $this->load->view($this->base_dir.'/master' , $data);
    }
}
