
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>vOffice Referral</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/ytplayer.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Montserrat:100,300,400,600,700" rel="stylesheet" type="text/css">
    </head>
    <body>
				
		<?php include("header.html")?>
		
		<div class="main-container">
        
        <form class="form-email" data-success="Thanks for your booking, we will be in touch to confirm shortly." data-error="Please fill all fields correctly.">
                                	
		  <section class="bg-secondary">
		    <div class="container">
		      <div class="row text-center">
		        <div class="col-md-6 col-md-offset-3 col-sm-12 mb40 mb-xs-24">
		        <div class="feature feature-1 boxed">		          
		                        <h3 class="bold mb8">Lets talk payment.</h3>
		                        <p>Thanks for helping to grow the community. <br>Let us know how would you like to get paid.</p>
		                        <hr class="short-thick inline-block">
		                        <p>Already sent your payment information to referrals@voffice.com.my?<br> Then you're all set! There's no need to complete this form.</p>
                                
                                <p class="text-left mb8">Your Country:</p>
                                    <div class="select-option p0">
		                                <i class="ti-angle-down"></i>
		                                <select class="validate-required" name="country">
		                                    <option selected="selected" value="Malaysia">Malaysia</option>
		                                    <option value="Philippines">Philippines</option>
		                                    <option value="Indonesia">Indonesia</option>
		                                </select>
		                            </div>
		          </div>
                  
                  <p class="uppercase mb8 text-left">Payment Info</p>
                  <div class="feature feature-1 boxed">		          
		                 <div class="tabbed-content text-tabs">
		                        <ul class="tabs">
		                            <li class="active">
		                                <div class="tab-title">
		                                    <span>Personal Info</span>
		                                </div>
		                                <div class="tab-content">
		                                    <p class="text-left mb8">Legal name:</p>
		                            		<input type="text" class="validate-required" name="name" placeholder="Legal name">
                                            <p class="text-left mb8">SSN:</p>
                                            <input type="text" class="validate-required" name="name" placeholder="9 digits">
                                            <p class="text-left mb8">Address:</p>
                                            <input type="text" class="validate-required" name="name" placeholder="Address">
                                            <input type="text" class="validate-required" name="name" placeholder="City">
                                            <div class="select-option p0">
		                                <i class="ti-angle-down"></i>
		                                <select class="validate-required" name="state">
		                                    <option selected="selected" value="">State</option>
		                                    <option value="KUL">Kuala Lumpur</option>
		                                    <option value="SEl">Selangor</option>
		                                </select>
		                            </div>
                                            <input type="text" class="validate-required" name="name" placeholder="Postal/ZIP Code">
		                                </div>
		                            </li>
                                    <li>
		                                <div class="tab-title">
		                                    <span>Bank Details</span>
		                                </div>
		                                <div class="tab-content">
                                        	<div class="row text-left bg-light mb32">
                                        	<div class="overflow-hidden p24">
		                        				<i class="ti-lock icon icon-sm pull-left"></i>
		                        				<p class="p30">Your personal and banking information are protected and transferred via secure vOffice server.</p>
		                    				</div>
                                            </div>
		                                    <p class="text-left mb8">Bank Name:</p>
		                            		<input type="text" class="validate-required" name="name" placeholder="Name of the bank">
                                            <p class="text-left mb8">Account Name:</p>
                                            <input type="text" class="validate-required" name="name" placeholder="Name registered for this account">
                                            <p class="text-left mb8">Account Number:</p>
                                            <input type="text" class="validate-required" name="name" placeholder="0000000000">
		                                </div>
		                            </li>
                                    <li>
		                                <div class="tab-title">
		                                    <span>Form</span>
		                                </div>
		                                <div class="tab-content">
		                                    <div class="bg-secondary feature bordered">
                                            <i class="ti-file icon icon-sm mb16"></i>
                                            <p>Please upload a copy of your W9 form.</p>
                                            <a href="" class="btn btn-group">Choose File</a>
                                            </div>
                                            <p><a href="">Download blank W9 form template</a></p>
                                            <p class="text-left">
		                                        vOffice standard payment terms are Net 30. vOffice reserves the right to choose the mode of payment. By submitting this form the vendor accepts to these terms and certifies that the information provided is correct and s/he is authorized to disclose this information.
		                                    </p>
		                                </div>
		                            </li>
                                  </ul>
                          </div>
		          </div>
                  <button type="submit" class="mb8">Send Payment Details</button>
		        </div>
		      </div>
		    </div>
		  </section>
		
		                        </form>
		  <!--?php include("footer.html")?-->
		</div>
		
				
		<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/flexslider.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/masonry.min.js"></script>
        <script src="js/twitterfetcher.min.js"></script>
        <script src="js/spectragram.min.js"></script>
        <script src="js/ytplayer.min.js"></script>
        <script src="js/countdown.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
				
