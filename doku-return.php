<? session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Indonesia Virtual Office | Sewa Kantor | Jakarta | Surabaya | Denpasar</title>

    <meta name="description" content="Jakarta Virtual Office, Jakarta Serviced
Office, Indonesia Office - Instant Office di Jakarta, Indonesia -
Shared Office and Virtual Office Service in Jakarta Indonesia by
JakartartutualOffice.com"/>

    <meta name="Title" CONTENT="Virtual Office Indonesia - Call Answering,
Address, Serviced Office, Meeting Room, Company Incorporation
Dedicated Phone and Fax number, Virtual Address - Indonesia"/>

    <meta name="keywords" content="virtual office jakarta, indonesia,
serviced office, temporary office, shared office, office virtual,
indonesia virtual office, start business, cheap office, short term office, kantor virtual jakarta, sewa kantor, ruang
kantor, jakarta, indonesia, kantor murah, virtual office, virtual
address jakarta, address, business office, receptionist, courier,
personal assistant"/>

    <meta name="robots" content="index,follow"/>
    <META name="Author" content="vOffice.co.id">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/ytplayer.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/theme-v2.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>
    <link
        href='https://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600'
        rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,600,700" rel="stylesheet"
          type="text/css">

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-23514398-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>
<body>
				
		<?php include("header.html")?>
<?php if(file_exists($_POST["SESSIONID"].".php"))
         include $_POST["SESSIONID"].".php";
?>
        <div class="main-container">

    <section class="bg-dark pt120 pb64">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                    <h2 class="mb8">Thank you for your order!</h2>
		                </div>
		            </div>
		        </div>
		    </section>

      <section>
 		<div class="container">
                <div class="col-md-7 col-sm-12">
                <? if($response['RESPONSECODE'] === "0000"){ ?> 
                <div class="row">
        <h2 class="color-primary">You should recieve an email with your order details.</h2>

        <p>Kindly hold while we verify and process your order, we will contact you within few hours once your account is ready.</p>
        
        <h6 class="bold-h6 mb8">The Summary of Your Order</h6>
        <hr class="long-thick mb8">
        <table class="table table-striped table-bordered mb24">
			<!--thead>
				<tr>
					<th>Size</th>
					<th>Measurement</th>
				</tr>
			</thead-->
			<tbody>
				<tr>
					<th scope="row" width="50%">Reference Order No:</th>
					<td><span class="number"><?php echo $response["SESSIONID"]; ?></span></td>
				</tr>
			</tbody>
		</table>  
        
        <p>Thank you for choosing vOffice.com.ph and we look forward in having a successful business relationship with your organization.</p>
        </div>
        <? }else if($response['RESPONSECODE'] !== "0000"){ ?>
        <div class="row">
        	<h2 class="color-primary">Payment Failure!!</h2>

        <p>Unfortunately your order wasn't successful due to a payment error.</p>
        
        <h6 class="bold-h6 mb8">The Summary of Your Order</h6>
        <hr class="long-thick mb8">
        <table class="table table-striped table-bordered mb24">
			<!--thead>
				<tr>
					<th>Size</th>
					<th>Measurement</th>
				</tr>
			</thead-->
			<tbody>
				<tr>
					<th scope="row" width="50%">Reference Order No:</th>
					<td><span class="number"><?php echo $response["SESSIONID"]; ?></span></td>
				</tr>
			</tbody>
		</table>  
        
        <p>Please contact us at <a href="mailto:cs@voffice.co.id">cs@voffice.co.id</a> if you believe this should not be the case or you can retry again.</p>
        </div>
 <? }?>
      </div><!-- end col -->
                
                <div class="col-md-4 col-md-offset-1 col-sm-12">
                    <div class="feature boxed3 text-center">

							<h6 class="bold-h6">Any Further Inquiries?</h6>
                            <hr class="short-thick inline-block text-center">
                            <h5>Should you need to reach us or have any further enquiries, you may call us at <a href="tel:+622129222999">+6221 29222 999</a> or e-mail us at <a href="mailto:cs@voffice.co.id">cs@voffice.co.id</a></h5>
                    </div>
                </div><!--end col-->

		            
	</div>
    </section>
        
    <hr class="fade-half">
            
            <?php include("footer.html")?>
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
				
