<?php  

class login extends CI_Controller {

public function loginuser(){

    $this->form_validation->set_rules('email', 'Email address', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if ($this->form_validation->run() == FALSE){

        $this-> load-> view ('login');
      }
      else{ 

  $this ->load -> MODEL ('model_user');
  $result =  $this -> model_user -> loginuser();
  
  if ($result != false){

    $userdata = array(

        'user_id' => $result -> id,
        'fname' => $result -> fname,
        'lname' => $result -> lname,
        'email' => $result -> email,
        'logged_in' => TRUE


    );
    $this->session->set_userdata($userdata);
    $this ->session->set_flashdata('welcome', 'Welcome!');
    redirect('admin/index');


   } else{
    $this ->session->set_flashdata('error', ' Wrong Email and Password');
    redirect('home/login');


  }
  

      
      }
  





}
public function logoutuser()
{
    $this->session->unset_userdata('user_id'); 
    $this->session->unset_userdata('fname'); 
    $this->session->unset_userdata('lname'); 
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('logged_in'); 
    redirect('home');
}

}

?>