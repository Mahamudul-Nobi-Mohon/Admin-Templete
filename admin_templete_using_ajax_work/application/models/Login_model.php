<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Description of photo_gallery_model
*
* @author Arnob
*/


class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }




    public function user_login_data_check(){
    $name=$this->input->post('name');
    $email=$this->input->post('name');
    $password=md5($this->input->post('Password'));

    $attr=array(
        'email' => $email ,
        'password' =>$password
      );

    $result = $this->db->get_where('persons', $attr);



    if($result->num_rows() == 1){
        $attr=array(
        'current_user_id' => $result->row(0)->id ,
        'current_user_email' => $result->row(1)->email ,
        'current_user_name' =>$name,
        //'current_user_picture' =>$result->row(2)->picture,
        'role'                 =>  $result->row(3)->role,
        //'isActive'             => $result->row(4)->isActive
      );
        //var_dump($attr); exit();
        $this->session->set_userdata($attr);
        return TRUE;
    }
    else{
      return FALSE;
    }
    }

      //user_login_data_check end


      //is_user_loged_in start
    public function is_user_loged_in(){
      return $this->session->userdata('current_user_id') != FALSE;
    }
}

?>