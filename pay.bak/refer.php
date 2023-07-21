
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
		<section class="bg-secondary">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-6 col-md-offset-1 col-sm-6 mb40 mb-xs-24">
		                    <div class="feature feature-1 boxed text-center">
		                        <h3 class="bold mb8">Hey, <span class="uppercase bold">Albert</span>!</h3>
                                <p>Ready to make a referral?</p>
                                <hr>
		                        <form class="form-email" data-success="Thanks for your booking, we will be in touch to confirm shortly." data-error="Please fill all fields correctly.">
                                	<p class="text-left mb8">Enter your referral’s information:</p>
		                            <input type="text" class="validate-required" name="name" placeholder="Full Name">
		                            <input type="text" class="validate-required validate-email" name="email" placeholder="Email">
                                    <input type="text" class="validate-required mb24" name="phone" placeholder="Phone Number">
                                    <p class="text-left mb8">Tell us more about your referral:</p>
		                            <input type="text" class="validate-required" name="coname" placeholder="Company Name">
                                    <div class="select-option p0">
		                                <i class="ti-angle-down"></i>
		                                <select class="validate-required" name="persons">
		                                    <option selected="selected" value=""># of desk needed</option>
		                                    <option value="1-5">1-5</option>
		                                    <option value="6-10">6-10</option>
		                                    <option value="11-15">11-15</option>
		                                    <option value="16-20">16-20</option>
		                                    <option value="21+">21+</option>
		                                </select>
		                            </div>
		                            
		                            <div class="select-option p0">
		                                <i class="ti-angle-down"></i>
		                                <select class="validate-required" name="city">
		                                    <option selected="selected" value="">City</option>
		                                    <option value="KUL">Kuala Lumpur</option>
		                                    <option value="SEl">Selangor</option>
		                                </select>
		                            </div>
		                            
		                            <textarea class="validate-required" name="message" rows="4" placeholder="Additional notes"></textarea>
		                            <button type="submit" class="mb8">Submit Referral</button>
                                    <p class="sub text-left">By submitting your referral you agree to the <a href="">terms of service</a>.</p>
		                        </form>
		                    </div>
		                </div>
		                <div class="col-md-5 col-sm-6 mb40 mb-xs-24">
		                    <div class="feature feature-1 boxed">
		                        <div class="row">
		                            <h5 class="bold">Have questions?</h5>
		                        <hr>
		                        <ul class="accordion accordion-1 one-open">
		                        <li>
		                            <div class="title">
		                                <p class="bold inline-block mb0">What information do I need to provide to submit a referral?</p>
		                            </div>
		                            <div class="content">
		                                <p>
In order to submit a referral we need your referral's full name, email address, and phone number. Additional information (e.g. company name, number of desks, city of interest, etc.) will help us speed up the process.
		                                </p>
		                            </div>
		                        </li>
                                <li>
		                            <div class="title">
		                                <p class="bold inline-block mb0">Is there a limit to how many people I can refer?</p>
		                            </div>
		                            <div class="content">
		                                <p>
Nope. The more people you refer, the more you can earn!
		                                </p>
		                            </div>
		                        </li>
                                <li>
		                            <div class="title">
		                                <p class="bold inline-block mb0">How soon will I get my payment?</p>
		                            </div>
		                            <div class="content">
		                                <p>
When your referral joins vOffice, you'll receive your first payment 2–3 weeks after their membership starts. You'll get future payments on or before the 15th of each month, covering the month prior.
		                                </p>
		                            </div>
		                        </li>
                                <li>
		                            <div class="title">
		                                <p class="bold inline-block mb0">How do I know my referral has joined?</p>
		                            </div>
		                            <div class="content">
		                                <p>
You'll get an email notification from vOffice as soon as your referral joins. You can also stay up to date on the progress of referrals by clicking the "Track" page.
		                                </p>
		                            </div>
		                        </li>
                                <li>
		                            <div class="title">
		                                <p class="bold inline-block mb0">Do I get paid more if my referral ends up with a bigger office?</p>
		                            </div>
		                            <div class="content">
		                                <p>
Yes. If your referral outgrows his or her space and decides to move to a larger office that costs more, you'll make 10% of their new membership fee.
		                                </p>
		                            </div>
		                        </li>
                                </ul>
                                </div>
                                <div class="row text-center-xs">
                                	<h5 class="bold">Have more questions?</h5>
                                    <a href="contact.php" class="btn btn-filled">Contact Us</a>
                               	</div>
		                    </div>
		                </div>
		                
		            </div>
		            
		        </div>
		        
		    </section>
                        
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
				
