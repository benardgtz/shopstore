<?php 
$this->load->view('sule/header');
?>
<div class="container-fluid py-2">
    <div class="row">
      <div class="col-sm-6 col-md-8 col-lg-8 offset-md-2">
       <table class="table table-bordered table-stripped table-responsive mt-5" id="sule">
          <thead>
          <tr style="background:#48D1CC">
           <th scope="col">product ID</th>
           <th scope="col">product Code</th>
           <th scope="col">product name</th>
           <th scope="col">product price</th>
                   <!-- <th scope="col" class="th text-center">Update</th>
                   <th scope="col" class="th text-center">Delete</th> -->

        </tr>
     </thead>
<?php

  foreach($product as $row)
  {
  echo "<tr>";
  echo "<td>".$row->pid."</td>";
  echo "<td>".$row->pcode."</td>";
  echo "<td>".$row->pname."</td>";
  echo "<td>".$row->price."</td>";
  // echo "<td><a href='update_physics?id=".$row->id."' class='btn btn-primary'>Update</a></td>";

  // echo "<td><a href='delete_physics?id=".$row->id."'  class='btn delete btn-danger'>Delete</a></td>";
  echo "</tr>";

  }
  ?>
</table>


</div>
    </div>
</div>
<?php
$this->load->view('sule/foot');
?>