<!DOCTYPE html>
<html lang="en">
<?php

include("dbConfig.php");
?>
 <?php include_once('functions.php'); ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Berceau De la Nature</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
  <script src="lib/raphael-2.1.4.min.js"></script>
  <script src="lib/justgage.js"></script>
 <link type="text/css" rel="stylesheet" href="style.css"/> 
</head>
 
<body>
  <section id="container">
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
   
      <a href="index.html" class="logo"><b>Berceau <span>De La Nature</span></b></a>
 
      <div class="nav notify-row" id="top_menu">
	  
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">Actuators Tasks Achievement</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Irrigation plants</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Fan ventilation</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Soil Heating</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/sarra.jpg"></span>
                  <span class="subject">
                  <span class="from">Sarra</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  how is the meeting with the client?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/yassmine.jpg"></span>
                  <span class="subject">
                  <span class="from">Yassmine</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/mayssa.jpg"></span>
                  <span class="subject">
                  <span class="from">Mayssa</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                 how is the work progressing?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/rahma.jpg"></span>
                  <span class="subject">
                  <span class="from">Rahma</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">4</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 4 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  The temperture is very High.
                  <span class="small italic">4 mins</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Actuator 2 is Not Responding.
                  <span class="small italic">30 mins</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Soil Humidity reached 85%.
                  <span class="small italic">2 hrs</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/sarra.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sarra Jawadi</h5>
          <li class="mt">
            <a class="" href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
         <li class="mt">
            <a class="active" href="calendrier.php">
              <i class="fa fa-calendar"></i>
              <span>Calendar</span>
              </a>
          </li>
		   <li class="mt">
            <a href="user.php">
              <i class="fa fa-users"></i>
              <span>User</span>
              </a>
          </li>
          <!-- <li class="sub-menu"> -->
            <!-- <a href="javascript:;"> -->
              <!-- <i class="fa fa-cogs"></i> -->
              <!-- <span>Components</span> -->
              <!-- </a> -->
            <!-- <ul class="sub"> -->
             
              <!-- <li><a href="calendar.html">Calendar</a></li> -->
              <!-- <li><a href="gallery.html">Gallery</a></li> -->
              <!-- <li><a href="todo_list.html">Todo List</a></li> -->
              <!-- <li><a href="dropzone.html">Dropzone File Upload</a></li> -->
             
            <!-- </ul> -->
          <!-- </li> -->
     
          <!-- <li class="sub-menu"> -->
            <!-- <a href="javascript:;"> -->
              <!-- <i class="fa fa-tasks"></i> -->
              <!-- <span>Forms</span> -->
              <!-- </a> -->
            <!-- <ul class="sub"> -->
              <!-- <li><a href="form_component.html">Form Components</a></li> -->
              <!-- <li><a href="advanced_form_components.html">Advanced Components</a></li> -->
              <!-- <li><a href="form_validation.html">Form Validation</a></li> -->
              <!-- <li><a href="contactform.html">Contact Form</a></li> -->
            <!-- </ul> -->
          <!-- </li> -->
          <!-- <li class="sub-menu"> -->
            <!-- <a href="javascript:;"> -->
              <!-- <i class="fa fa-th"></i> -->
              <!-- <span>Data Tables</span> -->
              <!-- </a> -->
            <!-- <ul class="sub"> -->
              <!-- <li><a href="basic_table.html">Basic Table</a></li> -->
              <!-- <li><a href="responsive_table.html">Responsive Table</a></li> -->
              <!-- <li><a href="advanced_table.html">Advanced Table</a></li> -->
            <!-- </ul> -->
          <!-- </li> -->
          <!-- <li> -->
            <!-- <a href="inbox.html"> -->
              <!-- <i class="fa fa-envelope"></i> -->
              <!-- <span>Mail </span> -->
              <!-- <span class="label label-theme pull-right mail-info">2</span> -->
              <!-- </a> -->
          <!-- </li> -->
          
          <!-- <li class="sub-menu"> -->
            <!-- <a href="javascript:;"> -->
              <!-- <i class="fa fa-comments-o"></i> -->
              <!-- <span>Chat Room</span> -->
              <!-- </a> -->
            <!-- <ul class="sub"> -->
              <!-- <li><a href="lobby.html">Lobby</a></li> -->
              <!-- <li><a href="chat_room.html"> Chat Room</a></li> -->
            <!-- </ul> -->
          <!-- </li> -->
          <!-- <li> -->
            <!-- <a href="google_maps.html"> -->
              <!-- <i class="fa fa-map-marker"></i> -->
              <!-- <span>Google Maps </span> -->
              <!-- </a> -->
          <!-- </li> -->
        <!-- </ul> -->
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
             <div id="calendar_div">
	<?php echo getCalender(); ?>
</div>
         
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Sarra JAWADI </strong>. All Rights Reserved
        </p>
        <div class="credits">
       
           <a href="http://www.enis.rnu.tn/">Ecole Nationale d Ingenieurs De SFAX</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
	
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
  <script type="text/javascript">
  
 
 
 
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to our greenhouse web site !',
        // (string | mandatory) the text inside the notification
        text: 'This site web is dedicated to giving all greenhouse reviews and the actuators feedbacks. ',
        // (string | optional) the image to display on the left
        image: 'img/bb.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8500,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
 
 
 
  </body>

</html>
