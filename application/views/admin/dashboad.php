<?php   include('application\views\includes\header.php')     ?>





if ($this -> session ->flashdata('welcome')){

    echo "<h3>" .$this -> session -> flashdata('welcome')." </h3> ";
    
    }

?>
    








    <?php   include('application\views\includes\footer.php')     ?>