<?php 

class KoController extends CI_Controller 
{ 

public function __construct() 
{ 
parent::__construct(); 

//dili y�kle 
$this->setLang(); 
} 

public function setLang() 
{ 
$this->lang->load('home', $this->session->userdata('lang_file')); 
} 

}