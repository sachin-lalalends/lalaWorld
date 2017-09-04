<?php
	$this->load->view('head');
?>
<div id="wrapper">
	<nav class="navbar-default navbar-static-side" role="navigation">
	    <div class="sidebar-collapse">
	        <ul class="nav metismenu" id="side-menu">
	            <li class="nav-header">
	                <div class="dropdown profile-element"> <span>
	                        <img alt="image" class="img-circle" src="/skin/img/profile_small.jpg" />
	                         </span>
	                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
	                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
	                         </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
	                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
	                        <li><a href="profile.html">Profile</a></li>
	                        <li><a href="contacts.html">Contacts</a></li>
	                        <li><a href="mailbox.html">Mailbox</a></li>
	                        <li class="divider"></li>
	                        <li><a href="login.html">Logout</a></li>
	                    </ul>
	                </div>
	                <div class="logo-element">
	                    IN+
	                </div>
	            </li>
	            <li class="active">
	                <a href="index.html">
	                	<i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> 
	                </a>
	   			</li>
	            <li>
	                <a href="#">
	                	<i class="fa fa-cc-visa"></i> <span class="nav-label">LaLa Card</span>
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                	<i class="fa fa-exchange"></i>
	                	<span class="nav-label">LaLa Exchange</span>
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                	<i class="fa fa-retweet"></i>
	                	<span class="nav-label">LaLa Remit</span>
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                	<i class="fa fa-map-marker"></i>
	                	<span class="nav-label">LocalBits</span>
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                <i class="fa fa-files-o"></i>
	                <span class="nav-label">Bill Pay</span></a>
	            </li>
	 			 <li>
	                <a href="#">
	                <i class="fa fa-umbrella"></i>
	                <span class="nav-label">LaLa Insurance</span></a>
	            </li>
	            <li>
	                <a href="#">
	                <i class="fa fa-balance-scale"></i>
	                <span class="nav-label">LaLa Lends</span></a>
	            </li>
	            <li>
	                <a href="#">
	                <i class="fa fa-gift"></i>
	                <span class="nav-label">Loyality & Gift Cards</span></a>
	            </li>
	            <li>
	                <a href="#">
	                <i class="fa fa-money"></i>
	                <span class="nav-label">LaLa Wealth</span></a>
	            </li>
	        </ul>

	    </div>
	</nav>
	<div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <strong class="m-r-sm text-muted welcome-message">1 BTC = 310,559 | 1 ETH = 30,559</strong>
                </li>
                <!-- <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="/skin/img/a7.jpg">
                                </a>
                                <div>
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="/skin/img/a4.jpg">
                                </a>
                                <div>
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="/skin/img/profile.jpg">
                                </a>
                                <div>
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li> -->


                <li>
                    <a href="#">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
                <!-- <li>
                    <a class="right-sidebar-toggle">
                        <i class="fa fa-tasks"></i>
                    </a>
                </li> -->
            </ul>

        </nav>
        </div>