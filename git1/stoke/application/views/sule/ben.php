
<!DOCTYPE html>
<html lang="en" class=" h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SULE STOKE MANAGEMENT SYSTEM</title>
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <script scr="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- <script src="popper/popper.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css"> -->
<!-- <link rel="stylesheet" href="style.css"> -->
<style>
    .col-md-4{
        /* background-color:blue; */
        color:green;
        
    }
    /* .container{
        
        height: 100%;
    } */

   .col-md-3{
        background-color:black;
        height: 100%;
    }
    .col-md-6{
        background-color:black;
        height: 100%;
    }
    .col-md-3{
        background-color:black;
        height: 100%;
    }


</style>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column h-100">
 
        <nav class="navbar
            fixed-top 
            navbar-dark 
            navbar-expand-md 
            bg-dark">
           <a href="#" class="navbar navbar-brand mb-0 h2 ">
         <!-- <img 
         class="d-inline-block"

         src="assets/image/logo.jpg" height="70" width="70"> -->
            <h2 style="color:green;">INVENTORY CONTROL</h2> </a>
     <button 
     type="button"
     data-bs-toggle="collapse"
     data-bs-target="#navbarNav" 
     class="navbar-toggler"
     aria-control="navbarNav"
     aria-expanded="false"
     aria-lable="toggle navigation" >

     <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav">
               <li class="nav-item active">
                 <a href="#" class="nav-link active" >
                     Home
                 </a>
               </li>

             <li class="nav-item active dropdown">
                 <a href="#" 
                 class="nav-link dropdown-toggle"
                 id="navbarDropdown"
                 role="button"
                 data-bs-toggle="dropdown"
                 aria-expanded="fase" >
                 GATE SYSTEM
                 </a>
                 <ul class="dropdown-menu"
                     aria-labelledby="navbarDropdown"
                 >
                 <li>
                     <a href="sule/stoke_in" class="dropdown-item">
                         PURCHASE STOKE
                     </a>
                 </li>
                 <li>
                     <a href="" class="dropdown-item">
                         RECEIVING STOKE
                     </a>
                 </li>
                 </ul>
             </li>

             <li class="nav-item active">
                 <a href="#" class="nav-link">
                  REPORT
                 </a>
             </li>

             <li class="nav-item active">
                 <a href="#" class="nav-link">
                 LOGIN/REGISTER
                 </a>
             </li>
         </ul>

     </div>
 </nav>
<!-- body part -->

<div class="row">
  <div class="col-sm-4"><p>.col-sm-4</p></div>
  <div class="col-sm-4">.col-sm-4</div>
  <div class="col-sm-4">.col-sm-4</div>
</div>



<footer class="footer mt-auto py-3 bg-dark">
        <div class="container-fluid">

        <div class="row">
            <div class="col-md-4">
CONTACT AREA
            </div>
            <div class="col-md-4">
LOCATION AREA
</div>
<div class="col-md-4">
            <p>Education for all student of Tanzania</p>
            
</div>
        </div>
</div>
        
        
    </footer>
    <!-- <script>$('.dropdown').click(function(){$('.dropdown-menu').toggleClass('show');
    });</script> -->
    <script src="<?php echo base_url();?>assets/popper/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
</body>

</html>