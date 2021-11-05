<?php   include('application\views\includes\header.php')     ?>

<div class="container" >
<hr>
  
<h2 align="center">Add Post</h2>
<hr> 
<form>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="article">Article</label>
    <textarea class="form-control" name="article"  rows="10"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> I agee to teams and conditions
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
  <button type="submit" class="btn btn-default">Cancel</button>
</form>

</div>





 <?php   include('application\views\includes\footer.php')     ?>