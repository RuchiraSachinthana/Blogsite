<?php 
 
 class model_user extends CI_Model {
 
 function insertuserdata(){

$inputdata = array(


    'fname' => $this -> input -> post ('fname', TRUE),
    'lname' => $this -> input -> post ('lname', TRUE),
    'email' => $this -> input -> post ('email', TRUE),
    'password' => sha1($this -> input -> post ('password', TRUE)) 

);


return $this -> db -> insert('users', $inputdata);
//return FALSE;

 }

function loginuser(){

$email = $this -> input -> post ('email');
$password = sha1($this -> input -> post ('password')) ;

$this ->db -> WHERE('email',$email);
$this ->db -> WHERE('password',$password);

$respond = $this -> db -> get('users');
if($respond -> num_rows()==1){
    return $respond->row(0);
    
}else{
    
    return false;

}


 }


 }



?>