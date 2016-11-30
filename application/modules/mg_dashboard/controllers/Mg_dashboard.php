<?php

(defined('BASEPATH')) or exit('No direct script access allowed');
class Mg_dashboard extends UserController
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $data['content'] = 'mg_dashboard/dashboard_v';
    $this->templates->get_main_templates($data);
  }
}
