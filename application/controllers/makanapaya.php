<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Makanapaya extends CI_Controller {
    public function index()
	{
        $this->load->view('home.php');
	}

}