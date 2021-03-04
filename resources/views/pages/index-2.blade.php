<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Responsive Mega menu</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="{{ url('css/bootsnav.css') }}"> 	
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="{{ url('js/bootstrap.min.js') }}"></script>
   
    <script src="{{ url('js/bootsnav.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
   
</head>
<body>
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <nav class="navbar navbar-default navbar-mobile bootsnav on">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                           <i class="fa fa-bars"></i>
                       </button>
                   </div>
                   <div class="collapse navbar-collapse" id="navbar-menu">
                       <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
                           <li class="active">
                           <a href="#" data-hover="Home">Home <span></span></a></li>
                           
                           
                           <li>
                           <a href="#" data-hover="About">About <span></span></a>
                           </li>
                           
                           
                           <li class="dropdown">
                               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="Shortcodes">Shortcodes <span></span></a>
                               
                               <ul class="dropdown-menu animated">
                                   <li><a href="#">Custom Menu</a></li>
                                   <li><a href="#">Custom Menu</a></li>
                                   
                                   <li class="dropdown">
                                       <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sub Menu</a>
                                       
                                       <ul class="dropdown-menu animated">
                                           <li><a href="#">Custom Menu</a></li>
                                           <li><a href="#">Custom Menu</a></li>
                                           
                                           <li class="dropdown">
                                               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sub Menu</a>
                                               
                                               <ul class="dropdown-menu multi-dropdown animated">
                                                   <li><a href="#">Custom Menu</a></li>
                                                   <li><a href="#">Custom Menu</a></li>
                                                   <li><a href="#">Custom Menu</a></li>
                                                   <li><a href="#">Custom Menu</a></li>
                                               </ul>
                                           </li>
                                           
                                           <li><a href="#">Custom Menu</a></li>
                                       </ul>
                                   </li>
                                   
                                   
                                   <li><a href="#">Custom Menu</a></li>
                                   <li><a href="#">Custom Menu</a></li>
                                   <li><a href="#">Custom Menu</a></li>
                                   <li><a href="#">Custom Menu</a></li>
                               </ul>
                           </li>
                           
                           <li class="dropdown">
                               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="Pages">Pages <span></span></a>
                               
                               <ul class="dropdown-menu animated">
                                   <li><a href="#">Custom Menu</a></li>
                                   <li><a href="#">Custom Menu</a></li>
                                   
                                   <li class="dropdown">
                                       <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sub Menu</a>
                                       
                                       <ul class="dropdown-menu animated">
                                           <li><a href="#">Custom Menu</a></li>
                                           <li><a href="#">Custom Menu</a></li>
                                           
                                           <li class="dropdown">
                                               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sub Menu</a>
                                               <ul class="dropdown-menu multi-dropdown animated">
                                                   <li><a href="#">Custom Menu</a></li>
                                                   <li><a href="#">Custom Menu</a></li>
                                                   <li><a href="#">Custom Menu</a></li>
                                                   <li><a href="#">Custom Menu</a></li>
                                               </ul>
                                           </li>
                                           
                                           
                                           <li><a href="#">Custom Menu</a></li>
                                       </ul>
                                   </li>
                                   
                                   <li><a href="#">Custom Menu</a></li>
                                   <li><a href="#">Custom Menu</a></li>
                                   <li><a href="#">Custom Menu</a></li>
                                   <li><a href="#">Custom Menu</a></li>
                               </ul>
                           </li>
                           
                           <li><a href="#" data-hover="Portfolio">Portfolio <span></span></a></li>
                           <li class="dropdown megamenu-fw">
                               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Megamenu <span></span></a>
                               <ul class="dropdown-menu megamenu-content animated" role="menu">
                                   <li>
                                       <div class="row">
                                           <div class="col-menu col-md-3">
                                               <h6 class="title">Title Menu One</h6>
                                               <div class="content">
                                                   <ul class="menu-col">
                                                       <li><a href="#">Custom Menu</a></li>
                                                       <li><a href="#">Custom Menu</a></li>
                                                       <li><a href="#">Custom Menu</a></li>
                                                       <li><a href="#">Custom Menu</a></li>
                                                       <li><a href="#">Custom Menu</a></li>
                                                   </ul>
                                               </div>
                                           </div><!-- end col-3 -->
                                           <div class="col-menu col-md-3">
                                               <h6 class="title">Title Menu Two</h6>
                                               <div class="content">
                                                   <ul class="menu-col">
                                                       <li><a href="#">Custom Menu</a></li>
                                                       <li><a href="#">Custom Menu</a></li>
                                                       <li><a href="#">Custom Menu</a></li>
                                                       <li><a href="#">Custom Menu</a></li>
                                                       <li><a href="#">Custom Menu</a></li>
                                                   </ul>
                                               </div>
                                           </div><!-- end col-3 -->
                                           <div class="col-menu col-md-3">
                                               <h6 class="title">Title Menu Three</h6>
                                               <div class="content">
                                                   <ul class="menu-col">
                                                       <li><a href="#">Custom Menu</a></li>
                                                       <li><a href="#">Custom Menu</a></li>
                                                       <li><a href="#">Custom Menu</a></li>
                                                       <li><a href="#">Custom Menu</a></li>
                                                       <li><a href="#">Custom Menu</a></li>
                                                   </ul>
                                               </div>
                                           </div>
                                           <div class="col-menu col-md-3">
                                               <h6 class="title">Title Menu Four</h6>
                                               <div class="content">
                                                   <ul class="menu-col">
                                                       <li><a href="#">Custom Menu</a></li>
                                                       <li><a href="#">Custom Menu</a></li>
                                                       <li><a href="#">Custom Menu</a></li>
                                                       <li><a href="#">Custom Menu</a></li>
                                                       <li><a href="#">Custom Menu</a></li>
                                                   </ul>
                                               </div>
                                           </div><!-- end col-3 -->
                                       </div><!-- end row -->
                                   </li>
                               </ul>
                           </li>
                           <li><a href="#" data-hover="Contact">Contact <span></span></a></li>
                       </ul>
                   </div>
               </nav>
           </div>
       </div>
   </div>
</body>
</html>