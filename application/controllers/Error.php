<?php 
if ( ! defined('BASEPATH'))
exit ('No direct script acces allowed');

class Errors extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	}
 
	public function index(){
		$this->load->view('error404.php');
	}
}
