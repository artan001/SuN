<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pages
 *
 * @author Artan.s
 */
class Pages extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('TestConn');
    }
    public function index(){
//        $query = $this->TestConn->Test();
        $query['page'] = $this->TestConn->Test();
        $this->load->view('pages/newEmptyPHPWebPage',$query);
    }
    //put your code here
}
