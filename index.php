<!DOCTYPE html>
<html lang="en">
<?php

include("dbConfig.php");
?>
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
  <link rel="stylesheet" href="lib/xchart/xcharts.css">
  
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
  <script src="lib/raphael-2.1.4.min.js"></script>
  <script src="lib/justgage.js"></script>
 
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
            <a class="active" href="index.html">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
           <li class="mt">
            <a  href="calendrier.php">
              <i class="fa fa-calendar"></i>
              <span>Calendar</span>
              </a>
          </li>
		   <li class="mt">
            <a  href="user.php">
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
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
           <div class="content-panel">
          <h4>Temperature Chart</h4>
          <div class="panel-body">
            <figure class="demo-xchart" id="chart"></figure>
          </div>
        </div>
            <!--custom chart end-->
            <div class="row mt">
              <!-- SERVER STATUS PANELS -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="grey-panel pn donut-chart">
                  <div class="grey-header">
                    <h5>Internal Temperature</h5>
                  </div>
				  
                  <div id="g2" height="120" width="120"></div>
				  
               
                  <div class="row">
                    <div class="col-sm-6 col-xs-6 goleft">
                      
                    </div>
                    <div class="col-sm-6 col-xs-6">
                     
                    </div>
                  </div>
                </div>
                <!-- /grey-panel -->
              </div>
              <!-- /col-md-4-->
              <div class="col-md-4 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>Humidity</h5>
                  </div>
                  <div id="g1" height="120" width="120"></div>
                 
                  
                  <footer>
                    <div class="pull-left">
                      
                    </div>
                    <div class="pull-right">
                     
                    </div>
                  </footer>
                </div>
                <!--  /darkblue panel -->
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <!-- REVENUE PANEL -->
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>Luminosity</h5>
                  </div>
                   <div id="g3" height="120" width="120"></div>
                 
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
			     <div class="row">
              <!-- TWITTER PANEL -->
              <div class="col-md-4 mb">
                <div class="weather pn">
                  <i class="fa fa-cloud fa-4x"></i>
                  <h2>22º C</h2>
                  <h4>Sfax</h4>
                </div>
                
              </div>
			  
              <!-- /col-md-4 -->
              <div class="col-md-4 mb">
                <!-- WHITE PANEL - TOP USER -->
                <div class="white-panel pn">
                  <div class="white-header">
                    <h5>O3 Emission</h5>
                  </div>
                 <div id="g4" height="120" width="120"></div>
             
                </div>
              </div>
              <!-- /col-md-4 -->
			  
			  
			  
              <div class="col-md-4 mb">
                <!-- INSTAGRAM PANEL -->
                <div class="instagram-panel pn">
                  
                 
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
			
			
			
			
            <div class="row">
              <!-- WEATHER PANEL -->
              <div class="col-md-4 mb">
                 <div class="white-panel pn">
				     <div class="white-header">
                    <h5>Pressure</h5>
                  </div>
				  
                   <div id="g5" height="120" width="120"></div>
                  
                  <h4></h4>
                </div>
              </div>
              <!-- /col-md-4-->
			  
			  
			  
			  
              <!-- DIRECT MESSAGE PANEL -->
              <div class="col-md-8 mb">
                <div class="message-p pn">
                  <div class="message-header">
                    <h5>DIRECT MESSAGE</h5>
                  </div>
                  <div class="row">
                    <div class="col-md-3 centered hidden-sm hidden-xs">
                      <img src="img/mayssa.jpg" class="img-circle" width="65">
                    </div>
                    <div class="col-md-9">
                      <p>
                        <name>Mayssa</name>
                        sent you a message.
                      </p>
                      <p class="small">3 hours ago</p>
                      <p class="message">How is the work progressing ? the deadline is this monday,reply as soon as possible please.</p>
                      <form class="form-inline" role="form">
                        <div class="form-group">
                          <input type="text" class="form-control" id="exampleInputText" placeholder="Reply Here">
                        </div>
                        <button type="submit" class="btn btn-default">Send</button>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /Message Panel-->
              </div>
              <!-- /col-md-8  -->
            </div>
			
			
			
			
			
			
       
            <div class="row">
              <div class="col-md-8">
                <div class="product-panel-2 pn">
                  <div class="badge badge-hot"></div>
                  <img src="img/product.jpg" width="200" alt="">
                  <h5 class="mt"></h5>
                  <h6></h6>
                
                </div>
              </div>
              <!-- /col-md-4 -->
              <!--  PROFILE 02 PANEL -->
            
              <!--/ col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>Level of Water used</h5>
                  </div>
                  <canvas id="serverstatus03" height="120" width="120"></canvas>
                  <script>
                    var doughnutData = [{
                        value: 60,
                        color: "#2b2b2b"
                      },
                      {
                        value: 40,
                        color: "#fffffd"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus03").getContext("2d")).Doughnut(doughnutData);
                  </script>
                  <h3>60% USED</h3>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-lg-3 ds">
            <!--COMPLETED ACTIONS DONUTS CHART-->
            <div class="donut-main">
              <h4>Electricity Consumption</h4>
              <canvas id="newchart" height="130" width="130"></canvas>
              <script>
                var doughnutData = [{
                    value: 70,
                    color: "#4ECDC4"
                  },
                  {
                    value: 30,
                    color: "#fdfdfd"
                  }
                ];
                var myDoughnut = new Chart(document.getElementById("newchart").getContext("2d")).Doughnut(doughnutData);
              </script>
            </div>
            <!--NEW EARNING STATS -->
            <div class="panel terques-chart">
              <div class="panel-body">
                <div class="chart">
                  <div class="centered">
                    <span>Power consumed per month</span>
                    <strong>15%</strong>
                  </div>
                  <br>
                  <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                </div>
              </div>
            </div>
            <!--new earning end-->
            <!-- RECENT ACTIVITIES SECTION -->
            <h4 class="centered mt">RECENT ACTIVITY</h4>
            <!-- First Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>Just Now</muted>
                  <br/>
                  <a href="#">Water Pump</a> is ON.<br/>
                </p>
              </div>
            </div>
            <!-- Second Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>2 Minutes Ago</muted>
                  <br/>
                  <a href="#">Fan Ventilation</a> is ON.<br/>
                </p>
              </div>
            </div>
            <!-- Third Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>3 Hours Ago</muted>
                  <br/>
                  <a href="#">Soil Heating</a> is OFF.<br/>
                </p>
              </div>
            </div>
            <!-- Fourth Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>7 Hours Ago</muted>
                  <br/>
                  <a href="#">Surveillance camera</a> is permanently ON .<br/>
                </p>
              </div>
            </div>
            <!-- USERS ONLINE SECTION -->
            <h4 class="centered mt">TEAM MEMBERS ONLINE</h4>
            <!-- First Member -->
            <div class="desc">
              <div class="thumb">
                <img class="img-circle" src="img/yassmine.jpg" width="35px" height="35px" align="">
              </div>
              <div class="details">
                <p>
                  <a href="#">Yassmine</a><br/>
                  <muted>Available</muted>
                </p>
              </div>
            </div>
            <!-- Second Member -->
            <div class="desc">
              <div class="thumb">
                <img class="img-circle" src="img/rahma.jpg" width="35px" height="35px" align="">
              </div>
              <div class="details">
                <p>
                  <a href="#">Rahma</a><br/>
                  <muted>I am Busy</muted>
                </p>
              </div>
            </div>
            <!-- Third Member -->
            <div class="desc">
              <div class="thumb">
                <img class="img-circle" src="img/mayssa.jpg" width="35px" height="35px" align="">
              </div>
              <div class="details">
                <p>
                  <a href="#">Mayssa</a><br/>
                  <muted>Available</muted>
                </p>
              </div>
            </div>
            <!-- Fourth Member -->
            <div class="desc">
              <div class="thumb">
                <img class="img-circle" src="img/sarra.jpg" width="35px" height="35px" align="">
              </div>
              <div class="details">
                <p>
                  <a href="#">Sarra</a><br/>
                  <muted>Available</muted>
                </p>
              </div>
            </div>
            <!-- CALENDAR-->
            <div id="calendar" class="mb">
              <div class="panel green-panel no-margin">
                <div class="panel-body">
                  <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                    <div class="arrow"></div>
                    <h3 class="popover-title" style="disadding: none;"></h3>
                    <div id="date-popover-content" class="popover-content"></div>
                  </div>
                  <div id="my-calendar"></div>
                </div>
              </div>
            </div>
            <!-- / calendar -->
          </div>
          <!-- /col-lg-3 -->
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
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script src="lib/xchart/d3.v3.min.js"></script>
  <script src="lib/xchart/xcharts.min.js"></script>
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
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
   <script>
    document.addEventListener("DOMContentLoaded", function(event) {

      var g1 = new JustGage({
        id: 'g1',
        value: <?php 
		$requet= "select max(hum) from parameters";
if($result= mysqli_query($db,$requet)) {
while($ligne = mysqli_fetch_row($result)) {
$hum = $ligne[0];
echo($hum);
}
} else{
echo"Erreur de requ?te de base de donn?es.";
}
		?>,
        min: 0,
        max: 100,
        symbol: '%',
        pointer: true,
        gaugeWidthScale: 0.6,
        customSectors: [{
          color: '#E30C0C',
          lo: 0,
          hi: 15
        }, {
          color: '#6CC829',
          lo: 15,
          hi: 27
        },{
		  color: '#ECEC09',
          lo: 27,
          hi: 39
		},{
		  color: '#E30C0C',
          lo: 39,
          hi: 100
		}],
        counter: true
      });

      var g2 = new JustGage({
        id: 'g2',
        value: <?php 
		$requet= "select max(temp) from parameters";
		if($result= mysqli_query($db,$requet)) {
		while($ligne = mysqli_fetch_row($result)) {
		$temp = $ligne[0];
		echo($temp);
        }
        } else{
           echo"Erreur de requ?te de base de donn?es.";
        }
		?>,
        min: 0,
        max: 100,
		symbol:' ºC',
       
        pointer: true,
        pointerOptions: {
          toplength: -15,
          bottomlength: 10,
          bottomwidth: 12,
          color: '#8e8e93',
          stroke: '#ffffff',
          stroke_width: 3,
          stroke_linecap: 'round'
        },
        gaugeWidthScale: 0.6,
		customSectors: [{
          color: '#E30C0C',
          lo: 0,
          hi: 15
        }, {
          color: '#6CC829',
          lo: 15,
          hi: 27
        },{
		  color: '#ECEC09',
          lo: 27,
          hi: 39
		},{
		  color: '#E30C0C',
          lo: 39,
          hi: 100
		}],
        counter: true
      });

      var g3 = new JustGage({
        id: 'g3',
        value: <?php 
		$requet= "select max(lumiere) from parameters";
if($result= mysqli_query($db,$requet)) {
while($ligne = mysqli_fetch_row($result)) {
$lumiere = $ligne[0];
echo($lumiere);
}
} else{
echo"Erreur de requ?te de base de donn?es.";
}
		?>,
        min: 0,
        max: 100,
        symbol: '%',
        donut: true,
        pointer: true,
        gaugeWidthScale: 0.4,
        pointerOptions: {
          toplength: 10,
          bottomlength: 10,
          bottomwidth: 8,
          color: '#000'
        },
        customSectors: [{
          color: "#ff0000",
          lo: 50,
          hi: 100
        }, {
          color: "#00ff00",
          lo: 0,
          hi: 50
        }],
        counter: true
      });
	  

      var g4 = new JustGage({
        id: 'g4',
        value: <?php 
		$requet= "select max(Oxygene) from data";
		if($result= mysqli_query($db,$requet)) {
		while($ligne = mysqli_fetch_row($result)) {
		$o = $ligne[0];
		echo($o);
        }
        } else{
           echo"Erreur de requ?te de base de donnes.";
        }
		?>,
        min: 0,
        max: 100,
        symbol: '%',
        pointer: true,
        pointerOptions: {
          toplength: 8,
          bottomlength: -20,
          bottomwidth: 6,
          color: '#8e8e93'
        },
        gaugeWidthScale: 0.1,
        counter: true
      });
	  var g5 = new JustGage({
        id: 'g5',
        value: <?php 
		$requet= "select max(Pression) from data";
		if($result= mysqli_query($db,$requet)) {
		while($ligne = mysqli_fetch_row($result)) {
		$p = $ligne[0];
		echo($p);
        }
        } else{
           echo"Erreur de requ?te de base de donnes.";
        }
		?>,
        min: 0,
        max: 1000,
		symbol:' Pa',
  
        pointer: true,
        pointerOptions: {
          toplength: 8,
          bottomlength: -20,
          bottomwidth: 6,
          color: '#8e8e93'
        },
        gaugeWidthScale: 0.1,
        counter: true
      });

      document.getElementById('gauge_refresh').addEventListener('click', function() {
        g1.refresh(getRandomInt(0, 100));
        g2.refresh(getRandomInt(0, 100));
        g3.refresh(getRandomInt(0, 100));
        g4.refresh(getRandomInt(0, 100));
		g5.refresh(getRandomInt(0, 1000));
      });
    });
    </script>
	<script>
	var temp=[]
var temp_sol=[]
var lumiere=[]
var humsol=[]
<?php 
$requet= "select time,temp from parameters";
if($result= mysqli_query($db,$requet)) {
while($ligne = mysqli_fetch_row($result)) {
$time = $ligne[0];
$temp = $ligne[1];
?>

temp.push(<?php echo("{
            'y': $temp,
            'x': '$time'
          }"); ?>);

<?php
}
} else{
echo"Erreur de requete de base de donnees.";
}
?>
		
		
		
<?php 
$requet= "select time,temp_sol from parameters";
if($result= mysqli_query($db,$requet)) {
while($ligne = mysqli_fetch_row($result)) {
$time = $ligne[0];
$temp_sol = $ligne[1];
?>

temp_sol.push(<?php echo("{
            'y': $temp_sol,
            'x': '$time'
          }"); ?>);

<?php
}
} else{
echo"Erreur de requete de base de donnees.";
}
?>

		
<?php 
$requet= "select time,hum_sol from parameters";
if($result= mysqli_query($db,$requet)) {
while($ligne = mysqli_fetch_row($result)) {
$time = $ligne[0];
$hum_sol = $ligne[1];
?>

humsol.push(<?php echo("{
            'y': $hum_sol,
            'x': '$time'
          }"); ?>);

<?php
}
} else{
echo"Erreur de requete de base de donnees.";
}
?>
<?php 
$requet= "select time,lumiere from parameters";
if($result= mysqli_query($db,$requet)) {
while($ligne = mysqli_fetch_row($result)) {
$time = $ligne[0];
$lumiere = $ligne[1];
?>

lumiere.push(<?php echo("{
            'y': $lumiere,
            'x': '$time'
          }"); ?>);

<?php
}
} else{
echo"Erreur de requete de base de donnees.";
}
?>
</script>
	<script>
	
	
    (function() {
      var data = [{
        "xScale": "ordinal",
        "comp": [],
        "main": [{
          "className": ".main.l1",
          "data":temp
        }, {
          "className": ".main.l2",
          "data": temp_sol
        }],
        "type": "line-dotted",
        "yScale": "linear"
      }, {
        "xScale": "ordinal",
        "comp": [],
        "main": [{
          "className": ".main.l1",
          "data": temp
        }, {
          "className": ".main.l2",
          "data": temp_sol
        }],
        "type": "cumulative",
        "yScale": "linear"
      }, {
        "xScale": "ordinal",
        "comp": [],
        "main": [{
          "className": ".main.l1",
          "data": temp
        }, {
          "className": ".main.l2",
          "data": temp_sol
        }],
        "type": "bar",
        "yScale": "linear"
      }];
      var order = [0, 1, 0, 2],
        i = 0,
        xFormat = d3.time.format('%A'),
        chart = new xChart('line-dotted', data[order[i]], '#chart', {
          axisPaddingTop: 5,
          dataFormatX: function(x) {
            return new Date(x);
          },
          tickFormatX: function(x) {
            return xFormat(x);
          },
          timing: 1250
        }),
        rotateTimer,
        toggles = d3.selectAll('.multi button'),
        t = 3500;

      function updateChart(i) {
        var d = data[i];
        chart.setData(d);
        toggles.classed('toggled', function() {
          return (d3.select(this).attr('data-type') === d.type);
        });
        return d;
      }

      toggles.on('click', function(d, i) {
        clearTimeout(rotateTimer);
        updateChart(i);
      });

      function rotateChart() {
        i += 1;
        i = (i >= order.length) ? 0 : i;
        var d = updateChart(order[i]);
        rotateTimer = setTimeout(rotateChart, t);
      }
      rotateTimer = setTimeout(rotateChart, t);
    }());
  </script>
</body>

</html>
