<?php

class Maintenance extends MX_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->config('allblue');
    $this->load->module('templates');
  }
  public function status()
  {
    if($this->config->item('maintenance')):
      $data['content'] = 'maintenance/maintenance_v';
      $this->templates->get_main_templates($data);
      die();
    endif;
  }
}
