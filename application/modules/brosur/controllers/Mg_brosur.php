<?php

(defined('BASEPATH')) or exit('No direct script access allowed');
class Mg_brosur extends UserController
{
  public function __construct()
  {
    parent::__construct();
  }
  public function brosur()
  {
    $data['content'] = 'brosur/brosur_v';
    $this->templates->get_main_templates($data);
  }
  public function ksurat()
  {
    $data['content'] = 'brosur/ksurat_v';
    $this->templates->get_main_templates($data);
  }
  public function knama()
  {
    $data['content'] = 'brosur/knama_v';
    $this->templates->get_main_templates($data);
  }
  public function sajalan()
  {
    $data['content'] = 'brosur/sajalan_v';
    $this->templates->get_main_templates($data);
  }
  public function kwitansi()
  {
    $data['content'] = 'brosur/kwitansi_v';
    $this->templates->get_main_templates($data);
  }
  public function nota()
  {
    $data['content'] = 'brosur/nota_v';
    $this->templates->get_main_templates($data);
  }
  public function kalender()
  {
    $data['content'] = 'brosur/kalender_v';
    $this->templates->get_main_templates($data);
  }
  public function skit()
  {
    $data['content'] = 'brosur/skit_v';
    $this->templates->get_main_templates($data);
  }
  public function yasin()
  {
    $data['content'] = 'brosur/yasin_v';
    $this->templates->get_main_templates($data);
  }
  public function undangan()
  {
    $data['content'] = 'brosur/undangan_v';
    $this->templates->get_main_templates($data);
  }
  public function xbanner()
  {
    $data['content'] = 'brosur/xbanner_v';
    $this->templates->get_main_templates($data);
  }
  public function kado()
  {
    $data['content'] = 'brosur/kkado_v';
    $this->templates->get_main_templates($data);
  }
}
