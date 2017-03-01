<?php

class Page extends UserController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function contact_us()
    {
         $data['content'] = 'page/contact_us_v';
         $this->templates->get_main_templates($data);
    }
}