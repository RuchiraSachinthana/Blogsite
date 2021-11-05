<?php   

class register extends CI_Controller {

public function registeruser(){

    $this->form_validation->set_rules('fname', 'First Name', 'required');
    $this->form_validation->set_rules('lname', 'Last Name', 'required');
    $this->form_validation->set_rules('email', 'Email address', 'required|valid_email|is_unique[users.email]');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');
  
    if ($this->form_validation->run() == FALSE){

      $this-> load-> view ('register');
    }
    else{

      $this -> load -> MODEL('model_user');
      $response = $this -> model_user -> insertuserdata();
      if($response){
         $this ->session->set_flashdata('msg', 'Registered Successfull...Please Login!');
         redirect('home/login');
      } else{
         $this ->session->set_flashdata('msg', 'Something went wrong!');
         redirect('home/register');

      }
    }




   }

      
      

      
}  

?>