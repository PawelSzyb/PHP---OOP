<?php
  class Pages extends Controller {
    public function __construct() {
    
    }
    public function index() {
      
      $data = 
        [
          'title' => "SzybajMVC",
        ];
        
      $this->view("pages/index", $data);
    }
    public function about() {
      $data = 
      [
        'title' => "ABOUT US"
      ];
      $this->view("pages/about",$data);
    }
  }