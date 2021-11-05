<?php   include('application\views\includes\header.php')     ?>



<?php 

if(!($this->session->userdata('logged_in'))){

redirect('home/login');

}

if ($this -> session ->flashdata('welcome')){

    echo "<h3>" .$this -> session -> flashdata('welcome')." </h3> ";
    
    }

?>
    








    <?php   include('application\views\includes\footer.php')     ?>