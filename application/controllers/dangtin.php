<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dangtin extends CI_Controller {
	public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->model("frontend/mmenu");
		$this->load->model("frontend/mpost");
		$this->data['menu']=$this->mmenu->menu_by(1,0);
		$this->data['pages']='dangtin';
    }
	public function index()
	{
		$this->data['cat']='them';
		$this->load->database();
		$this->load->view('frontend/home',$this->data);
	}
	function save(){                          
		$data = array( 
		'recruitment'=>$_POST['recruitment'], 
		'title' => $_POST['title'], 
		'number' => $_POST['number'], 
		'position' => $_POST['position'], 
		'postdate' => $_POST['postdate'], 
		'outdate' => $_POST['outdate'],
		'describer' => $_POST['describer'],
		'status' => $_POST['status']
		); 
		$this->mpost->insert($data); 
		redirect(""); 
	}
	public function them()
    {
        //call helper form
        $this->load->helper('form');
        $data['editor'] =   $this->tinymce();
        //call view
        $this->load->view('frontend/components/dangtin/them',$data);
    }

    public function tinymce()
    {
        $this->load->helper('url');
        $editor = '<!-- place in header of your html document -->
            <script type="text/javascript" src="'.  base_url().'/tinymce/tinymce.min.js"></script>
            <script>
            tinymce.init({
                selector: "textarea",
                theme: "modern",
                width: 850,
                height: 300,
                relative_urls : false,
                remove_script_host: false,
                plugins: [
                     "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                     "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                     "save table contextmenu directionality emoticons template paste textcolor responsivefilemanager"
               ],
               content_css: "css/content.css",
               toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | responsivefilemanager | print preview media fullpage | forecolor backcolor emoticons", 
               style_formats: [
                    {title: "Bold text", inline: "b"},
                    {title: "Red text", inline: "span", styles: {color: "#ff0000"}},
                    {title: "Red header", block: "h1", styles: {color: "#ff0000"}},
                    {title: "Example 1", inline: "span", classes: "example1"},
                    {title: "Example 2", inline: "span", classes: "example2"},
                    {title: "Table styles"},
                    {title: "Table row 1", selector: "tr", classes: "tablerow1"}
                ],
                external_filemanager_path:"'.  base_url().'filemanager/",
                filemanager_title:"Responsive Filemanager" ,
                external_plugins: { "filemanager" : "'.  base_url().'filemanager/plugin.min.js"}
             }); 
            </script>'
             ;
        return $editor;
    }
}
