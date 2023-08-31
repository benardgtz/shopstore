<?php 
$this->load->view('sule/header');
?>
<div class="container-fluid py-3 me-0">
    <div class="row">
      <div class="col-sm-8 col-md-10 col-lg-10 offset-md-1">
       <table class="table table-bordered cell-border table-stripped table-responsive mt-5" id="sule">
          <thead>
          <tr style="background:#48D1CC">
           <th scope="col">product ID</th>
           <th scope="col">product name</th>
           <th scope="col">product price</th>
           <th scope="col">product status</th>
           <th scope="col">Product Quantity</th>
           <th scope="col">Update Time</th>
          <th scope="col" class="th text-center">CHANGE STATUS</th>
          <th scope="col" class="th text-center">Delete</th>
        </tr>
     </thead>
<?php

  foreach($product as $row)
  {
  echo "<tr>";
  echo "<td>".$row->pid."</td>";
  echo "<td>".$row->pname."</td>";
  echo "<td>".$row->price."</td>";
  echo "<td>".$row->status."</td>";
  echo !empty($row->qty)?"<td>".$row->qty."</td>":"<td>0</td>"; //if empty quantity place zero otherwise print its value
  echo "<td>".$row->time."</td>";
 echo "<td><a href='product_update?pid=".$row->pid."' class='btn btn-primary'>Update</a></td>";
 echo "<td><a pid='".$row->pid."' name ='".$row->pname."'   class='btn delete btn-danger confirmDelete'>Delete</a></td>";
  echo "</tr>";

  }
  ?>



<!-- <?php
// echo $data;

?> -->
</table>


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
   var pid  =$(this).attr('pid');
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