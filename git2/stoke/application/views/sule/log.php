<?php 
$this->load->view('sule/headerout');
?>
<div class="container-fluid mt-5">

   <div class="row justify-content-center">
       <div class="col-md-5">
           <div class="card shadow">

             <div class="card-header text-uppercase text-center">
                   <h4>LOGIN TO YOUR ACCOUNT</h4>
              </div>
                    <div class="card-body">
                      <!-- form starts here -->
                         <form method="post" action="<?php echo site_url('sule/Log/auth');?>">

                             <div class="form-group">
                                <label for="product id">Enter Email:</label>
                                    <input type="email" name="email" class="form-control"     
                                    placeholder="eg. xxxxxxx@gmail.com" required>
                                    <?php
                                    if(form_error('email')){
                                     echo"<small>".form_error('email')."</small>";
                                               }
                                     ?>
                             </div>
                             <div class="form-group">
                                <label for="password">Enter Password:</label>
                                    <input type="password"  name="password" class="form-control" 
                                         placeholder="Enter your password" required>
                                         <?php
                                              if(form_error('password')){
                                                echo"<small>".form_error('password')."</small>";
                                                  }
                                                         ?>
                              </div>
 
                          
                          </from><br><br>
                  
                          <center>
                          <input type="submit" name="submit" class="btn btn-lg btn-primary" value="LOGIN" style="">

                          </center>
                          <h2><?php echo $this->session->tempdata('success'); ?></h2>
              </div>
          </div>
        </div>
     </div>
</div>
<?php
$this->load->view('sule/foot');
if(!empty($this->session->flashdata('error'))){?>
<script>
  $(document).ready(function(){
    var errors ='<?=$this->session->flashdata('error')?>';
    toastr.error(errors);
  });
</script>
<?php
}
?>
