
   <?php   include('application\views\common\header.php')     ?>



<div class="container" >
<hr>
  
<h2 align="center"> Login</h2>
<hr>
<?php if ($this -> session ->flashdata('welcome')){

echo "<h3>" .$this -> session -> flashdata ('welcome')." </h3> ";

} ?>
<?php echo validation_errors(); ?>
<?php echo form_open('login/loginuser');     ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me 
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
  <?php echo form_close(); ?>

</div>






   <?php   include('application\views\common\footer.php')     ?>