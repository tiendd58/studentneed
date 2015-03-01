
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hientin extends CI_Controller {
	public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->model("frontend/mmenu");
		$this->data['menu']=$this->mmenu->menu_by(1,0);
		$this->data['pages']='hientin';
		
    }
	public function index()
	{
		$this->data['cat']='show';
		$this->load->database();
		$this->load->view('frontend/home',$this->data);
	}
	public function show($id){
		$id=(int)$id;
		$data['post']=$this->db->select('*')->from('post')->where(array('idpost' => $id))->get()->row_array();
		if(!isset($data['post']) || count($data['post'])==0){
			header('Location: http://localhost/studentneed/tinmoi');
			die;
		}
		$this->data['post']=$data['post'];
		$this->data['cat']='show';
		$this->load->view('frontend/home',$this->data);	
	}
}
