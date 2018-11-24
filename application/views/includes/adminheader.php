<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AEGEN: Exam Generator System</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/vendor/bootstrap/css/bootstrap.min'); ?>" >

    <!-- Custom fonts for this template -->
    <link  rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/vendor/fontawesome-free/css/all.min'); ?>">
    <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Montserrat:400,700'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic'); ?>" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/vendor/magnific-popup/magnific-popup'); ?>" >

    <!-- Custom styles for this template -->
    <link  rel="stylesheet" href="<?php echo base_url('bootstrap/css/freelancer2'); ?>">

  </head>
<style>
   .active{
   background: #18bc9c;
   }
   
   thead{
	border-bottom: 1px solid #e5e5e5;
	background-color: #f8f8f8;
   }

   
   table tbody tr{
	cursor: pointer;
	transition: background-color .5s;
   }
  
   .title-head{
   padding-top: 120px;
   padding-bottom: 50px;
   padding-left: 20px;
   text-align: left;
   }
    .title-head, name{
	font-size: 10px;
   }
   
   .active{
   background:rgba(153, 153, 153, 0.25);
   }
    .formy input[type=email], input[type=text], input[type=password] {
	display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	padding-bottom: 10px;
	padding-top: 10px;
	padding-right: 10px;
	padding-left: 10px;
	font-size: 15px;
	color: black;
	width: 100%;
   }
   .AddProf{
   	font-size: 25px;
	font-family: Montserrat;
	padding-top: 20px;
	padding-left: -10px
	color: #2c3e50;
   }
</style>	 
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Hi Admin!</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#muser">Manage Users</a>
            </li> 
			<li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#csyllabus">Course Syllabus</a>
            </li> 
			<li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
