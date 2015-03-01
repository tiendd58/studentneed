<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trangchu extends CI_Controller {
	public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->model("frontend/mmenu");
		$this->data['menu']=$this->mmenu->menu_by(1,0);
		$this->load->model("frontend/mpost");
		$this->data['post']=$this->mpost->post_by();
 
 }
	public function index()
	{
		$this->load->database();
		$this->load->view('frontend/home',$this->data);
	}
}
