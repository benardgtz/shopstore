
<?php 
$this->load->view('sule/header');
?>

<div class="container-fluid mt-3">

  <div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card shadow">
           <div class="card-header text-uppercase text-center">
                       <h4>PRODUCT DELIVERY PORTAL</h4>
           </div>
             <div class="card-body">
   <!-- form starts here -->
              <form method="post">

                  <div class="form-group">
                    <label for="product id">PRODUCT ID:</label>
                     <input type="text" name="pid" class="form-control"
                       placeholder="eg TY54647" required>
                  </div>
                  <!-- <div class="form-group">
                   <label for="pcode">Product code:</label>
                     <input type="text"  name="pcode" class="form-control" 
                       placeholder="Enter CODE" id="pwd" required>
                  </div> -->
 
                 <div class="form-group">
                   <label for="product name">product name:</label>
                      <input type="text" name="pname" class="form-control" 
                       placeholder="Enter product name" id="product name" required>
                 </div>

                 <div class="form-group">
                  <label for="price">Product price:</label>
                      <input type="text" name="price" class="form-control" 
                        placeholder="Enter price" step="any" id="price" required>
                 </div>
                 <div class="form-group">
                  <label for="">Quantity</label>
                 <input type="number" name="quantity" min=0 required id="quantity" class="form-control">
                </div>

               <div class="form-group">
                 <label for="price">Product status:</label>
                  <select name="status" id="status">
                  <optgroup label="product status">
                   <option value="loaded">loaded</option>
                  <!-- <option value="dispatch">dispatch</option> -->
                  </optgroup>
                  </select>
                </div>
              </from>
                  
            <center>
               <input type="submit" name="submit" class="btn btn-lg btn-primary" value="DELIVER" style="">

           </center>

       </div>
    </div>
  </div>
 </div>
</div>

<?php 
  $this->load->view('sule/foot');
  if($this->session->flashdata('status') =='login'){
    ?>
    <script>
      $(document).ready(function(){
        toastr.success('Logged in successfuly');
      });
    </script>
 <?php }
 if($this->session->flashdata('success')){
  ?>
  <script>
    $(document).ready(function(){
      var msg ='<?=$this->session->flashdata('success')?>'
      toastr.success(msg);
    });
  </script>
<?php 
}

  ?>