<?php 
$this->load->view('sule/header');
?>
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
    <div class="col-sm-9 col-md-6 col-lg-6">
      <div class="card">
      <div class="card-header text-uppercase text-center">
                       <h4>SALES OF PRODUCT(MAUZO YA BIZAA)</h4>
           </div>
            <div class="card-body">
            <form action="" method="post" class="form-horizontal">
      <label for="product">Product Name</label>
      <select name="product" id="product" class="form-control">
            <?php
             echo '<option value="0"> Select Product to Sale</option>';

            foreach($products as $prod){
                 
                  echo '<option value="'.$prod->pid.'"> '.$prod->pid.' - '.$prod->pname.'</option>';
            }
            ?>

      </select>
      <label for="">Quantity</label>
      <input type="number" name="amount" id="amount" min=0 class="form-control">
      <input type="submit" value="Save" class="btn btn-primary m-2">
     </form>     
            </div>
      </div>
    </div>
    </div>
</div>
<?php
$this->load->view('sule/foot');
?>
<script>
  $(".confirmDelete").click(function(){
   //get id of clicked item
   var url ='<?=base_url()?>';
   console.log(url);
   var pid  =$(this).attr('id');
   var pname =$(this).attr('name');
   
    Swal.fire({
      icon:'info',
      title:'Are you Sure?',
      text:'Your about to delete '+pname+' Product! ' +pid+'',
      showCancelButton:true,
      confirmButtonColor:'#d33',
      confirmButtonText:'Yes, Delete It',
      cancelButtonColor:'#3085d6',
    }).then((result)=>{
      if(result.isConfirmed){
        //use ajax to perform delete operation
        $.ajax({
          url:'<?=base_url('index.php/sule/Sule/delete_product')?>',
          type:'POST',
          data:{pid:pid},
          success:function(response){
            //when ajax success, what do you want to do?
           if(response ==1){
            Swal.fire({
              icon:'success',
              title:'success',
              text:pname +' Deleted Successfuly',
           }).then((result)=>{
            window.location.reload();
           });
           }else{
            Swal.fire({
              icon:'error',
              title:'Error',
              text:'An Error occured when Deleting'+pname,
           });
           }
          }
        })
        }
  });
  })
</script>


<?php
if($this->session->flashdata('update')){
  ?>
  <script>
    $(document).ready(function(){
        var msg='<?=$this->session->flashdata('update')?>'
   toastr.success(msg);
        
      });
      
  </script>
<?php
}
if($this->session->flashdata('success')){
  ?>
  <script>
    $(document).ready(function(){
        var msg='<?=$this->session->flashdata('success')?>'
   toastr.success(msg);
        
      });
      
  </script>
<?php
}
if($this->session->flashdata('error')){
  ?>
  <script>
    $(document).ready(function(){
        var msg='<?=$this->session->flashdata('error')?>'
   toastr.error(msg);
        
      });
      
  </script>
<?php
}
?>