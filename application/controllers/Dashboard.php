<?php
ini_set('memory_limit', '1024M');
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->load->view("dashboard/dash");

        }
        function logout() {
            
            $this->session->sess_destroy();
            redirect(site_url("login"));
        } 
    }
?>