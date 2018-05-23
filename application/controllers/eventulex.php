<?php
class eventulex extends CI_Controller 
{
    // http://localhost/codeigniter/index.php/eventulex/
    public function index() // Página principal
    {
    	$this->load->helper('url');
        $this->load->view('eventCabecera.php');
        $this->load->view('eventPrincipal.php');
        $this->load->view('eventPie.php');
    }
}