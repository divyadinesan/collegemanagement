 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indexcontroller extends CI_Controller {

public function index()
{
	$this->load->model('indexmodel');
	$Arrdata['faculty']=$this->indexmodel->faculty_fetch_model();
	$Arrdata['department']=$this->indexmodel->department_fetch_model();
	$this->load->view('Index/index',$Arrdata);
	
}

public function about()
	{
		$this->load->view('Index/about');
	}
public function contact()
	{
		$this->load->view('Index/contact');
	}



}