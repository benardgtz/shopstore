<!DOCTYPE html>
<html lang="en" class=" h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>SULE STOKE MANAGEMENT SYSTEM</title>

 <!-- <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css"> -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
     
    <link href="<?php echo base_url();?>assets/css/toastr.css" rel="stylesheet">

    <!--start bootstrap links -->

    <link href="<?php echo base_url();?>assets/css/cdn.bootstrap.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-grid.css.map" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-grid.min.css.map" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-grid.rtl.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-grid.rtl.css.map" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-grid.rtl.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-grid.rtl.min.css.map" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-reboot.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-reboot.css.map" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-reboot.min.cs.map" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-reboot.rtl.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-reboot.rtl.css.map" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-reboot.rtl.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-reboot.rtl.min.css.map" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/css/bootstrap-utilities.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-utilities.css.map" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-utilities.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-utilities.min.cs.map" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-utilities.rtl.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-utilities.rtl.css.map" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-utilities.rtl.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-utilities.rtl.min.css.map" rel="stylesheet">
    
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap.css.map" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.cs.map" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap.rtl.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap.rtl.css.map" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap.rtl.min.css.map" rel="stylesheet">
    


  <!-- end bootstrap links   -->




    <link href="<?php echo base_url();?>assets/css/cdn.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/fontawaresome.css" rel="stylesheet">
    <script scr="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="d-flex flex-column h-100 bg-secondary-subtle">
 
<nav class="navbar
            fixed-top 
            navbar-dark 
            navbar-expand-md 
            bg-black">
           <a href="#" class="navbar navbar-brand mb-0 h2 mt-0">
         <img 
         src="<?php echo base_url()?>assets/image/sule3.jpg"  class="rounded-lg" width="70" height="50">
            <h2 style="color:white;">INVENTORY CONTROL</h2> </a>
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
                     <a href="stoke" class="dropdown-item">
                        STOKE-IN
                     </a>
                 </li>
                 <li>
                     <a href="purchase" class="dropdown-item">
                       PURCHASE
                     </a>
                 </li>
                 <!-- <li>
                     <a href="stokeout" class="dropdown-item">
                         STOKE-OUT
                     </a>
                 </li> -->
                 </ul>
             </li>

             <li class="nav-item active dropdown">
                 <a href="#" 
                 class="nav-link dropdown-toggle"
                 id="navbarDropdown"
                 role="button"
                 data-bs-toggle="dropdown"
                 aria-expanded="fase" >
                INFORMATION VIEW
                 </a>
                 <ul class="dropdown-menu"
                     aria-labelledby="navbarDropdown"
                 >
                 <li>
                     <a href="productoverview" class="dropdown-item">
                    view product 
                     </a>
                 </li>
                 

                 </li>
                 </ul>
             </li>
             
             <li class="nav-item active">
                 <a href="<?php echo site_url('sule/Sule/logout')?>" class="nav-link">
                 LOGOUT
                 </a>
             </li>
         </ul>

     </div>
 </nav>
  </nav><br><br><br>