<?php

/**
 * {Login Model}
 *
 * @version $Revision: 1.1.1.1 $
 * @author Nikhil Pujari
 */
class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
    }
    function check_user($user, $pass) {
        return $this->db->where(array("username" => $user, "password" => $pass))->get("users");
    }
}
?>