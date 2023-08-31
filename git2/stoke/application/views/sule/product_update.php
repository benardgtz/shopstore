<?php 
$this->load->view('sule/header');
?>


<div class="container-fluid py-3" style="margin-bottom:10%;">
<div class="col-sm-6 col-md-6 col-lg-7 offset-md-2">
<div class="card p-3">
  <div class="card-header">
  <h2>DISPATCH BY CHANGE STATUS OF PRODUCT</h2>
  </div>
<div class="card-bo">

  <?php
  $i=1;
  foreach($product as $row)
  {
  ?>

<form  method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
  <div class="form-group">
    <label for="pid">product id</label>
    <input type="text" name="pid" value="<?php echo $row->pid;?>" class="form-control" placeholder="Enter pid"> 
  </div>
  </div>
  </div>
  <div class="row">
<div class="row">
        <div class="col-md-6">
  <div class="form-group">
    <label for="pname">pname</label>
    <input type="text" name="pname" value="<?php echo $row->pname;?>" class="form-control" placeholder="Enter pname name">
  </div>
</div>
</div>

<div class="row">
  <div class="col-md-6">
  <div class="form-group">
    <label for="price">product price</label>
    <input type="text" name="price" value="<?php echo $row->price;?>" class="form-control" placeholder="Enter price">
  </div>
</div>
</div>

<div class="form-group">
     <label for="price">Product status:</label>
           <select name="status" id="status">
           <optgroup label="product status">
          <option value="loaded">loaded</option>
          <option value="dispatch">dispatch</option>
           </optgroup>
         </select>
</div>


 <input type="submit" name="update" class="btn btn-primary" value="DISPATCH/SOLD">
</form>

<?php } ?>
  </div>
</div>
</div>


<!-- ckeditor code -->
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<?php
$this->load->view('sule/foot');
?>


