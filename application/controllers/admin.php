<?php   

class admin extends CI_Controller {

    public function index(){

        $this -> load -> view('admin/dashboad.php');

    }

    public function addpost(){

        $this -> load -> view('admin/add.php');

    }

}
?>