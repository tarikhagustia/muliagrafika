<?php

(defined('BASEPATH')) or exit('No direct script access allowed');
class TemplatesController extends MX_Controller
{
    public $base_dir;
    public function __construct()
    {
        parent::__construct();
        $this->base_dir = 'rhytm';
    }
}
