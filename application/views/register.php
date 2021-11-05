<?php  include 'application\views\common\header.php'    ?>



<div class="container" >
<hr>
  
<h2 align="center"> Register</h2>
<hr>
<?php if ($this -> session ->flashdata('msg')){

echo "<h3>" .$this -> session -> flashdata ('msg')." </h3> ";

} ?>
<?php echo validation_errors(); ?>
<?php echo form_open('register/registeruser');     ?>


<div class="form-group">
    <label for="examplefirstname1">First Name</label>
    <input type="text" class="form-control" name="fname" placeholder="First Name">
  </div>
  <div class="form-group">
    <label for="examplelastname1">Last Name</label>
    <input type="text" class="form-control" name="lname" placeholder="Last Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2"> Comfirm Password</label>
    <input type="password" class="form-control" name="cpassword" placeholder="Comfirm Password">
  </div>
 
  <button type="submit" class="btn btn-default">Submit</button>

<?php echo form_close(); ?>
</form>
</div>


<?php  include 'application\views\common\footer.php'    ?>

