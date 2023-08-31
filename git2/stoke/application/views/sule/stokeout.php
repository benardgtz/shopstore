<?php 
$this->load->view('sule/header');
?>

<div class="container-fluid mt-5">
       <div class="row justify-content-center">
               <div class="col-md-5">
                      <div class="card shadow">
                              <div class="card-header text-uppercase text-center">
                                     <h3>PRODUCT DISPATCH</h3>
                              </div>
                              <div class="card-body">
   <!-- form starts here -->
                                  <form method="post">
                                            <div class="form-group">
                                                  <label for="product id">Remove product from stoke('Enter ID of product')
                                                  </label>
                                                  <input type="text" name="pid" class="form-control"
                                                  placeholder="eg TY54647" required>
                                             </div>
                                 </from>
  
                              </div>
                                       <center>
                                           <input type="submit" name="submit" class="btn btn-lg btn-primary" value="SOLD" style="">

                                        </center><br><br>

                        </div>
                  </div>
            </div>
   </div>
<br><br>
<?php 
  $this->load->view('sule/foot');
  ?>