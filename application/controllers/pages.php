<?php
  /**
   *
   */
  class Pages extends CI_Controller
  {
    public function __construct(){
      parent::__construct();
      $this->load->helper('url');
    }

    function view ( $page = 'home')
    {

      $this->load->view('pages/'.$page);
    }
  }



?>
