<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dangtin extends CI_Controller {
	public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->model("frontend/mmenu");
		$this->data['menu']=$this->mmenu->menu_by(1,0);
		$this->data['pages']='dangtin';
    }
	public function index()
	{
		$this->data['cat']='them';
		$this->load->database();
		$this->load->view('frontend/home',$this->data);
	}
}
