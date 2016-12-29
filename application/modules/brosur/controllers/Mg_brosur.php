<?php

(defined('BASEPATH')) or exit('No direct script access allowed');
class Mg_brosur extends UserController
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $data['content'] = 'brosur/brosur_v';
    $this->templates->get_main_templates($data);
  }
}
