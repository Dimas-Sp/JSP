<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ColorFlipper extends CI_Controller {

	public function simple()
	{
		$this->load->view('Color_Flipper');
	}

	public function hex()
	{
		$this->load->view('Color_Hex');
	}

}
