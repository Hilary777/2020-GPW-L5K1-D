<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title>The Chengdu Bus Company</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap1.min.css" rel="stylesheet">
    <link href="css/custom1.css" rel="stylesheet">
    
    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	
    <div class="loader">
       <div>
        <img src="images/icons/preloader.gif" />
       </div>
    </div>
    
    <div class="container-fluid">
		<div class="row">
        	<div class="col-sm-5 left-wrapper">
            	<div class="event-banner-wrapper">
                	<div class="logo">
                     <a href="in.php" class="nav-link">Home</a>
                    </div>
                
                	<h2>
                    ChengDu<br>  Bus Company
                    <span>Booking System</span>
                    </h2>
                </div>
            </div>
            <div class="col-sm-7 right-wrapper">
            	<div class="event-ticket-wrapper">
                    
                    <div class="event-tab">
                
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#buyTicket" aria-controls="buyTicket" role="tab" data-toggle="tab">Buy Tickets</a></li>
                     <li role="presentation"><a href="food.php" class="nav-link">Buy Foods</a></li>
                    <li role="presentation"><a href="inde.php" class="nav-link">Buy Snacks</a></li>
                  </ul>
                
                  <!-- Tab panes -->
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="buyTicket">
                    	<div class="row">
                        	<div class="col-md-6">
                            	<div class="ticketBox" data-ticket-price="25/95">
                                	<div class="inactiveStatus"></div>
                                    
                                    <div class="row">
 			                       	<div class="col-xs-6">
            							<div class="ticket-name">
                                        	NO.1 Route
                                            <span>Seating<br>
                                        	1 Ticket for 1 person</span>
                                        </div>
            						</div>
                                    
                                    <div class="col-xs-6">
            							<div class="ticket-price-count-box">
                                            <div class="ticket-control">
                                                <div class="input-group">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                          <span class="glyphicon glyphicon-minus"></span>
                                                      </button>
                                                  </span>
                                                  <input type="text" name="quant[1]" class="form-control input-number" value="0" min="0" max="1">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                                          <span class="glyphicon glyphicon-plus"></span>
                                                      </button>
                                                  </span>
                                                </div>
                                            </div>
                                            <p class="price">RMB 25/95</p>
                                        </div>
            						</div>
                                    </div>
                                	
                                    
                                    <div class="ticket-description">
                                        <p><strong>Route information:</strong><br>Chengdu bus terminus,bien road,jiepai, king hui jing (8.am-4.pm) </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tlinks">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
                            <div class="col-md-6">
                            	<div class="ticketBox" data-ticket-price="25/95">
                                	<div class="inactiveStatus"></div>
                                    
                                    <div class="row">
 			                       	<div class="col-xs-6">
            							<div class="ticket-name">NO.2 Route<span>
                                       Seating<br>
                                        1 Ticket for 1 person</span></div>
            						</div>
                                    
                                    <div class="col-xs-6">
            							<div class="ticket-price-count-box">
                                            <div class="ticket-control">
                                                <div class="input-group">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
                                                          <span class="glyphicon glyphicon-minus"></span>
                                                      </button>
                                                  </span>
                                                  <input type="text" name="quant[2]" class="form-control input-number" value="0" min="0" max="1">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[2]">
                                                          <span class="glyphicon glyphicon-plus"></span>
                                                      </button>
                                                  </span>
                                                </div>
                                                
                                            </div>
                                            <p class="price">RMB 25/95</p>
                                        </div>
            						</div>
                                    </div>
                                	
                                    
                                    <div class="ticket-description">
                                    	<p><strong>Route information:</strong><br>Chengdu bus terminus, xihe road, yudai street, luodaiancient town(7.am-5.pm)</p>
                                    </div>
                                            
                                </div>
                            </div>
                            <div class="col-md-6">
                            	<div class="ticketBox" data-ticket-price="25/95">
                                	<div class="inactiveStatus"></div>
                                    
                                    <div class="row">
 			                       	<div class="col-xs-6">
            							<div class="ticket-name">NO.3 Route <span>
                                        Seating<br>
                                        1 Ticket for 1 person</span></div>
            						</div>
                                    
                                    <div class="col-xs-6">
            							<div class="ticket-price-count-box">
                                            <div class="ticket-control">
                                                <div class="input-group">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[3]">
                                                          <span class="glyphicon glyphicon-minus"></span>
                                                      </button>
                                                  </span>
                                                  <input type="text" name="quant[3]" class="form-control input-number" value="0" min="0" max="1">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[3]">
                                                          <span class="glyphicon glyphicon-plus"></span>
                                                      </button>
                                                  </span>
                                                </div>
                                                
                                            </div>
                                            <p class="price">RMB 25/95</p>
                                        </div>
            						</div>
                                    </div>
                                	
                                    
                                    <div class="ticket-description">
                                    	<p><strong>Route information:</strong><br>Chengdu bus terminus, xi pu bus station, zhanqi village, liduipark(10.am-3.pm)</p>
                                    </div>
                                            
                                </div>
                            </div>
                            <div class="col-md-6">
                            	<div class="ticketBox" data-ticket-price="25/95">
                                	<div class="inactiveStatus"></div>
                                    
                                    <div class="row">
 			                       	<div class="col-xs-6">
            							<div class="ticket-name">NO.4 Route<span>
                                        Seating<br>
                                        1 Ticket for 1 person</span></div>
            						</div>
                                    
                                    <div class="col-xs-6">
            							<div class="ticket-price-count-box">
                                            <div class="ticket-control">
                                                <div class="input-group">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[4]">
                                                          <span class="glyphicon glyphicon-minus"></span>
                                                      </button>
                                                  </span>
                                                  <input type="text" name="quant[4]" class="form-control input-number" value="0" min="0" max="1">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[4]">
                                                          <span class="glyphicon glyphicon-plus"></span>
                                                      </button>
                                                  </span>
                                                </div>
                                                
                                            </div>
                                            <p class="price">RMB 25/95</p>
                                        </div>
            						</div>
                                    </div>
                                	
                                    
                                    <div class="ticket-description">
                                    	<p><strong>Route information:</strong><br>Chengdu bus terminus,shiling overpass, donglin second road panda base(1.pm-6.pm)</p>
                                    </div>
                                            
                                </div>
                            </div>
                            <div class="col-md-6">
                            	<div class="ticketBox" data-ticket-price="25/95">
                                	<div class="inactiveStatus"></div>
                                    
                                    <div class="row">
 			                       	<div class="col-xs-6">
            							<div class="ticket-name">NO.5 Route<span>
                                        Seating<br>
                                        1 Ticket for 1 person</span></div>
            						</div>
                                    
                                    <div class="col-xs-6">
            							<div class="ticket-price-count-box">
                                            <div class="ticket-control">
                                                <div class="input-group">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[5]">
                                                          <span class="glyphicon glyphicon-minus"></span>
                                                      </button>
                                                  </span>
                                                  <input type="text" name="quant[5]" class="form-control input-number" value="0" min="0" max="1">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[5]">
                                                          <span class="glyphicon glyphicon-plus"></span>
                                                      </button>
                                                  </span>
                                                </div>
                                                
                                            </div>
                                            <p class="price">RMB 25/95</p>
                                        </div>
            						</div>
                                    </div>
                                	
                                    
                                    <div class="ticket-description">
                                    	<p><strong>Route information:</strong><br>Chengdu bus terminus, yinhui road, jinmaqiao, xiyuan hotel(11.am-4.pm)</p>
                                    </div>
                                            
                                </div>
                            </div>
                            <div class="col-md-6">
                            	<div class="ticketBox" data-ticket-price="25/95">
                                	<div class="inactiveStatus"></div>
                                    
                                    <div class="row">
 			                       	<div class="col-xs-6">
            							<div class="ticket-name">NO.6 Route<span>
                                        Seating<br>
                                        1 Ticket for 1 person</span></div>
            						</div>
                                    
                                    <div class="col-xs-6">
            							<div class="ticket-price-count-box">
                                            <div class="ticket-control">
                                                <div class="input-group">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[6]">
                                                          <span class="glyphicon glyphicon-minus"></span>
                                                      </button>
                                                  </span>
                                                  <input type="text" name="quant[6]" class="form-control input-number" value="0" min="0" max="1">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[6]">
                                                          <span class="glyphicon glyphicon-plus"></span>
                                                      </button>
                                                  </span>
                                                </div>
                                                
                                            </div>
                                            <p class="price">RMB 25/95</p>
                                        </div>
            						</div>
                                    </div>
                                	
                                    
                                    <div class="ticket-description">
                                    	<p><strong>Route information:</strong><br>Chengdu bus terminus, lianshanshan, honghe, longping road(11.am-5.pm)</p>
                                    </div>
                                            
                                </div>
                            </div>
                            <div class="col-md-6">
                            	<div class="ticketBox" data-ticket-price="25/95">
                                	<div class="inactiveStatus"></div>
                                    
                                    <div class="row">
 			                       	<div class="col-xs-6">
            							<div class="ticket-name">NO.7 Route<span>
                                        Seating<br>
                                        1 Ticket for 1 person</span></div>
            						</div>
                                    
                                    <div class="col-xs-6">
            							<div class="ticket-price-count-box">
                                            <div class="ticket-control">
                                                <div class="input-group">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[7]">
                                                          <span class="glyphicon glyphicon-minus"></span>
                                                      </button>
                                                  </span>
                                                  <input type="text" name="quant[7]" class="form-control input-number" value="0" min="0" max="10">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[7]">
                                                          <span class="glyphicon glyphicon-plus"></span>
                                                      </button>
                                                  </span>
                                                </div>
                                                
                                            </div>
                                            <p class="price">RMB 25/95</p>
                                        </div>
            						</div>
                                    </div>
                                	
                                    
                                    <div class="ticket-description">
                                    	<p><strong>Route information:</strong><br>Chengdu bus terminus, chengdu-chongqi interchange, yidu east road, peach blossom hometown(6.am-12.am)</p>
                                    </div>
                                            
                                </div>
                            </div>
                            <div class="col-md-6">
                            	<div class="ticketBox" data-ticket-price="25/95">
                                	<div class="inactiveStatus"></div>
                                    
                                    <div class="row">
 			                       	<div class="col-xs-6">
            							<div class="ticket-name">NO.8 Route<span>
                                        Seating<br>
                                        1 Ticket for 1 person</span></div>
            						</div>
                                    
                                    <div class="col-xs-6">
            							<div class="ticket-price-count-box">
                                            <div class="ticket-control">
                                                <div class="input-group">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[8]">
                                                          <span class="glyphicon glyphicon-minus"></span>
                                                      </button>
                                                  </span>
                                                  <input type="text" name="quant[8]" class="form-control input-number" value="0" min="0" max="1">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[8]">
                                                          <span class="glyphicon glyphicon-plus"></span>
                                                      </button>
                                                  </span>
                                                </div>
                                                
                                            </div>
                                            <p class="price">RMB 25/95</p>
                                        </div>
            						</div>
                                    </div>
                                	
                                    
                                    <div class="ticket-description">
                                    	<p><strong>Route information:</strong><br>Chengdu bus terminus, niuwangmiao,shamo street,chunxi road(7.am-2.pm)</p>
                                    </div>
                                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="venue">
                    	<h4> Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit,<br> sed do eiusmod<br> Pune 411058</h4><br>
                        
                        
                        
                                </div>
                            </div>
                            <div class="col-md-6">
                            	<div class="ticketBox" data-ticket-price="25/95">
                                	<div class="inactiveStatus"></div>
                                    
                                    <div class="row">
 			                       	<div class="col-xs-6">
            							<div class="ticket-name">NO.9 Route<span>
                                        Seating<br>
                                        1 Ticket for 1 person</span></div>
            						</div>
                                    
                                    <div class="col-xs-6">
            							<div class="ticket-price-count-box">
                                            <div class="ticket-control">
                                                <div class="input-group">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[9]">
                                                          <span class="glyphicon glyphicon-minus"></span>
                                                      </button>
                                                  </span>
                                                  <input type="text" name="quant[9]" class="form-control input-number" value="0" min="0" max="1">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[9]">
                                                          <span class="glyphicon glyphicon-plus"></span>
                                                      </button>
                                                  </span>
                                                </div>
                                                
                                            </div>
                                            <p class="price">RMB 25/95</p>
                                        </div>
            						</div>
                                    </div>
                                	
                                    
                                    <div class="ticket-description">
                                    	<p><strong>Route information:</strong><br>Chengdu bus terminus, yulin road, second municipal hospital, gaoshengqiao(11.am-6.pm)</p>
                                    </div>
                                            
                                </div>
                            </div>
                            <div class="col-md-6">
                            	<div class="ticketBox" data-ticket-price="25/95">
                                	<div class="inactiveStatus"></div>
                                    
                                    <div class="row">
 			                       	<div class="col-xs-6">
            							<div class="ticket-name">NO.10 Route<span>
                                        Seating<br>
                                        1 Ticket for 1 person</span></div>
            						</div>
                                    
                                    <div class="col-xs-6">
            							<div class="ticket-price-count-box">
                                            <div class="ticket-control">
                                                <div class="input-group">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[]">
                                                          <span class="glyphicon glyphicon-minus"></span>
                                                      </button>
                                                  </span>
                                                  <input type="text" name="quant[10]" class="form-control input-number" value="0" min="0" max="1">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[10]">
                                                          <span class="glyphicon glyphicon-plus"></span>
                                                      </button>
                                                  </span>
                                                </div>
                                                
                                            </div>
                                            <p class="price">RMB 25/95</p>
                                        </div>
            						</div>
                                    </div>
                                	
                                    
                                    <div class="ticket-description">
                                    	<p><strong>Route information:</strong><br>Chengdu bus terminus,jinjiang avenue, huabo, sansheng flower township(3.pm-9.pm)</p>
                                    </div>
                                            
                                	
                                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="venue">
                    	<h4> Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit,<br> sed do eiusmod<br> Pune 411058</h4><br>
                       
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="termCondition">
           				<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
                    </div>
                  </div>
                
                </div>
                
                	<div class="cart">
                <div class="row">
                    <div class="col-xs-6">
                        <p> 
                        	
                    </div>
                    <div class="col-xs-6">
                    	<div class="text-right">
                        	<a class="btn disabled" data-toggle="modal" data-target="#ticket-details">PROCEED</a>
                        </div>
                    </div>
                </div>
                </div>
                       
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal right fade" id="ticket-details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Share your contact Details</h4>
      </div>-->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        	<img src="images/icons/cancel.png">
        </button>
        <h4 class="modal-title">Your Tickets</h4>
      </div>
      <div class="modal-body">
        
        <div class="cart-information">
            	<div class="ticket-type"></div>
          		<ul>
	                <li>Tickets: <span class="ticket-count"></span></li>
                    <li>Price: <span class="ticket-amount"></span></li>
                   
    			</ul>
            </div>
            
            <div class="contactForm">	
                <h3>Share your contact Details</h3>
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter your Name">
                  </div>
                    
                     <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter your ID Card">
                  </div>
                  
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter your Email ID">
                  </div>
                  
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Enter your Mobile No.">
                  </div>
                  
                  <a href="ind1.html"class="btn">Confirm the informationt </a>
                </form>
            </div>
        
        
        
      </div>
    </div>
  </div>
</div>
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap1.min.js"></script>
    <script src="js/allscript.js"></script>
  