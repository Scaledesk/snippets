<?php
class Welcome extends CI_Controller {
function __construct() {
parent::__construct();
$this->load->library(array('session'));
$this->load->model(array('Menu'));
}
function index()
{
$data = array(
'menu_top' => $this->Menu->menu_top()
);
$this->load->view('welcome_message', $data);
}
}
/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */

