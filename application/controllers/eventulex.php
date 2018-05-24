<?php
class eventulex extends CI_Controller 
{
    // http://localhost/codeigniter/index.php/eventulex/
    public function index() // Página principal
    {
    	$this->load->helper('url');
        $this->load->view('eventCabecera');
        $this->load->view('eventPrincipal');
        $this->load->view('eventPie');
    }

    public function login()
    {
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->view('eventCabecera');
        $this->load->view('login');
        $this->load->view('eventPie');
    }
}