<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Fare Order Form a Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Fare Order Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<!-- font-awesome-icons -->
<link href="css/font1-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="css/style4.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
<!--//fonts--> 
</head>
<body>
     <li class="nav-item active"><a href="food.php" class="nav-link">Home</a></li>
<!--background-->
<h1> Food Order Form </h1>
    <div class="bg-agile">
	<img src="images/side.png" alt="">
	<div class="book-appointment">
	<h2>Make Your Order Here</h2>
						<div class="book-form agileits-login">
							<form action="#" method="post">
								<div class="phone_email">
									<label>Full name : </label>
									<div class="form-text">
										<i class="fa fa-user" aria-hidden="true"></i>
										<input type="text" name="Name" placeholder="" required="">
									</div> 
								</div>
								<div class="phone_email phone_email1">
									<label>Email : </label>
									<div class="form-text">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<input type="email" name="email" placeholder="" required="">
									</div>
								</div>
								<div class="phone_email">
									<label>Phone number : </label>
									<div class="form-text">
										<i class="fa fa-phone" aria-hidden="true"></i>
										<input type="text" name="Phone no" placeholder="" required="">
									</div> 
								</div> 
								<div class="phone_email phone_email1">
									<label>Seat number : </label>
									<div class="form-text">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<input type="text" name="Seat number" placeholder="" required="">
									</div> 
								</div> 
								<div class="clear"></div>
								<div class="agileits_reservation_grid">
									<div class="span1_of_1">
										<label>Date : </label> 
										<div class="book_date"> 
											<i class="fa fa-calendar" aria-hidden="true"></i>
												<input  id="datepicker" name="Text" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">

										</div>					
									</div>
									<div class="span1_of_1">
										<!-- start_section_room -->
										<label>Time : </label>
										<div class="section_room">
											<i class="fa fa-clock-o" aria-hidden="true"></i>
											<select id="country" onchange="change_country(this.value)" class="frm-field required">
												<option value="AX"></option>
												<option value="null">Lunch</option>
												<option value="null">Dinner</option>         
												<option value="AX">Break Fast</option>
											</select>
										</div>	
									</div>
									<div class="span1_of_1">
										<label>The number of meals : </label>
										<!-- start_section_room -->
										<div class="section_room">
											<i class="fa fa-users" aria-hidden="true"></i>
											<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
												<option value="AX"></option>
												<option value="null">1 People</option>
												<option value="null">2 People</option>
												<option value="null">3 People</option>         
												<option value="AX">4 People</option>
												<option value="AX">More</option>
											</select>
										</div>	
									</div> 
									<div class="clear"></div>
								</div> 
												<div class="wthree-text"> 
												<h6>The menu number</h6>
												<ul>
													<li>
														<label class="anim">
															<input type="checkbox" class="checkbox">
															<span>No.1</span> 
														</label> 
													</li>
													<li>
														<label class="anim">
															<input type="checkbox" class="checkbox">
															<span>No.2</span> 
														</label> 
													</li>
													<li>
														<label class="anim">
															<input type="checkbox" class="checkbox">
															<span>No.3</span> 
														</label> 
													</li>
													<li>
														<label class="anim">
															<input type="checkbox" class="checkbox">
															<span>N0.4</span> 
														</label> 
													</li>
                                                    <li>
														<label class="anim">
															<input type="checkbox" class="checkbox">
															<span>No.5</span> 
														</label> 
													</li>
                                                    <li>
														<label class="anim">
															<input type="checkbox" class="checkbox">
															<span>No.6</span> 
														</label> 
													</li>
                                                    <li>
														<label class="anim">
															<input type="checkbox" class="checkbox">
															<span>No.7</span> 
														</label> 
													</li>
                                                    <li>
														<label class="anim">
															<input type="checkbox" class="checkbox">
															<span>No.8</span> 
														</label> 
													</li><li>
														<label class="anim">
															<input type="checkbox" class="checkbox">
															<span>No.9</span> 
														</label> 
													</li>
												</ul>
												<div class="clearfix"> </div>
											</div>
							<span class="ml-auto"><a href="payment.html">Submit And Pay </a></span>
                                
                                
						
		</div>
   </div>
  
		<script type="text/javascript" src="js/jquery1-2.1.4.min.js"></script>
		<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery1-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->

</body>
</html>