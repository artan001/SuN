<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Artan.s
 */
class Login extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model('Login_Model');
    }

    public function index() 
    {
        $data = array();
        $data['page'] = 'Login_View';
        // $this->session->sess_destroy();  //ทำลาย session ทั้งหมด
        $this->load->view(TEMPLATE_MANE, $data);
    }

    public function user_login($username, $password) 
    {
        $this->Login_Model->user_login($username, $password);
    }

}
