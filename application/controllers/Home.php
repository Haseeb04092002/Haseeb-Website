<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }

    public function index()
    {
    	$this->load->view('home');
    }

    public function Pages($Name = 'Home', $PD_Type = 'JS_web')
    {
    	switch ($Name)
    	{
    		case 'Home':
    			// $this->load->view('home#hero');
    			redirect('home#hero');
    			break;
    		case 'About':
    			redirect('home#about');
    			break;
    		case 'Resume':
    			redirect('home#resume');
    			break;
    		case 'Skills':
    			redirect('home#skills');
    			break;
    		case 'Services':
    			redirect('home#services');
    			break;
    		case 'Projects':
    			redirect('home#Projects');
    			break;
    		case 'RecentPosts':
    			redirect('home#RecentPosts');
    			break;
    		case 'Contact':
    			redirect('home#contact');
    			break;
    		case 'project_details':
    			switch ($PD_Type)
    			{
    				case 'JS_web':
    					$this->load->view('PD_JS_web');
    					break;
    				case 'myers_web':
    					$this->load->view('PD_myers_web');
    					break;
    				case 'realestate_web':
    					$this->load->view('PD_realestate_web');
    					break;
    			}
    			break;
    	}
    }
	
}

