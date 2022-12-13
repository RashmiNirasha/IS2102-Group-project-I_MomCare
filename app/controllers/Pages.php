<?php
  class Pages extends BaseController {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'MOMCARE',
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }

    public function admin(){
      $data = [
        'title' => 'Admin'
      ];

      $this->view('users/admin/index', $data);
    }
  }