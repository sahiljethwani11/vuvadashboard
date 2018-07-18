<?php

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('login_model', 'login', TRUE);

       
    }

    public function index() {
        
        if (isset($session_set_value['remember_me']) && $session_set_value['remember_me'] == "1") {
            redirect(site_url("dashboard/index"));
        } else {
            $this->load->view("login/login");
        }
            
            //SMTP & mail configuration
           
    }
    function forgot_password() {
        $this->load->view("login/forgot_pass");
    }
    function reset_pass() {
        
        
        $user = trim($this->input->post("username"));
        $email = trim($this->input->post("email"));
        
        if (!empty($user) || !empty($email)) {
            
            
            $temp_pass = $this->generate_pass();
            $this->load->library('email');
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'smtp.gmail.com';
            $config['charset'] = 'iso-8859-1';
            $config['smtp_user'] = 'sahiljethwani11@gmail.com';
            $config['smtp_pass'] = 'sahil1995';
            $config['mailtype'] = 'html';
            $config['smtp_port'] = 465;
            $config['wordwrap'] = TRUE;

            $this->email->initialize($config);
            $this->email->set_newline("\r\n");  
            $this->load->library('email');
                $this->email->from("sahiljethwani11@gmail.com");
                $this->email->to("sahil.jethwani@vivainfomedia.com");
                $this->email->message('pasword message practice');

                if($this->email->send())
                {
                 echo 'Email sent.'; die();
                }
                else
               {
                show_error($this->email->print_debugger());
               }
             
        }else{
            echo "nahi gaya";
                $this->session->set_flashdata("wrongcreds", "PASSNOTSENT");
                redirect(site_url("login/forgot_password"));
           
        }
    }
    function generate_pass() {
        $A1 = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
        $pass = "";
        for ($i = 0; $i < 8; $i++) {
            $rand = rand(0, 2);
            if ($rand == 0) {
                $pass .= $A1[rand(0, 25)];
            } else if ($rand == 1) {
                $pass .= strtolower($A1[rand(0, 25)]);
            } else {
                $pass .= rand(0, 9);
            }
            unset($rand);
        }

        return $pass;
    }
    function dologin() {
        
        $user = trim($this->input->post("user"));
        print_r($user);
        $pass = trim($this->input->post("pass"));
        $rem = trim($this->input->post("remember"));
         
            
        
       
        
        if (!empty($user) && !empty($pass)) {
            $pass = md5($pass);
            
            $result = $this->login->check_user($user, $pass)->row_array();
            
            if (count($result) > 0) {
                
                $this->session->set_userdata($result);
                $this->session->set_userdata("remember_me", true);
                redirect(site_url("dashboard/index"));
               
                
                
               
            } else {
                
                
                $this->session->set_flashdata("wrongpass", "WRONG");
                redirect(site_url("login"));
            }
        }

        redirect(site_url("login"));
    }
}
?>