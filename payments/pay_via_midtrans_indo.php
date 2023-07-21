<script type="text/javascript" src="https://api.sandbox.midtrans.com/v2/assets/js/veritrans.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="./midtrans/jquery.fancybox.pack.js"></script>
			<?php
			require_once('./midtrans/veritrans-php-master/Veritrans.php');

			// YOUR CLIENT KEY
			// can find in Merchant Portal -> Settings -> Access keys
			Veritrans_Config::$clientKey = "SB-Mid-client-Gw97ODxUjT1SF57t";

?>
<pre>
  <form action="token-checkout_midtrans.php" method="POST" id="payment-form" hidden="hidden">
        <input class="card-number" value="<?=$_POST['ccno']?>" size="23" type="text" autocomplete="off"  hidden="hidden"/>
        <input class="card-expiry-month" value="<?=$_POST['mm']?>" placeholder="MM" size="2" type="text"  hidden="hidden"/>
        <input class="card-expiry-year" value="<?=$_POST['yy']?>" placeholder="YYYY" size="4" type="text"  hidden="hidden"/>
        <input class="card-cvv" value="<?=$_POST['cvc']?>" size="4" type="password" autocomplete="off"  hidden="hidden"/>
        <input type="checkbox" name="secure" value="true"  hidden="hidden">
        <input type="checkbox" name="save_cc" value="true" checked  hidden="hidden">
		<input name="ref" id="ref" value="<?=$ref_id?>"  hidden="hidden"/>
     	<input class="card-price" name="price" id="price" value="<?=$price?>"  hidden="hidden"/>
     	<input name="item" id="item" value="<?=$ftype?>"  hidden="hidden"/>
     	<input name="name" id="name" value="<?=$name?>"  hidden="hidden"/>
     	<input name="phone" id="phone" value="<?=$phone?>"  hidden="hidden"/>
     	<input name="email" id="email" value="<?=$email?>"  hidden="hidden"/>
      	<input id="token_id" name="token_id"  hidden="hidden"/>
        <button class="submit-button" type="submit" hidden="hidden">Submit Payment</button>
  </form>
</pre>


  <!-- Javascript for token generation -->
  <script type="text/javascript">
    $(function () {
      // Sandbox URL
      Veritrans.url = "https://api.sandbox.midtrans.com/v2/token";
      // TODO: Change with your client key.
      Veritrans.client_key = "<?php echo Veritrans_Config::$clientKey ?>";
      var card = function () {
        return {
          "card_number": $(".card-number").val(),
          "card_exp_month": $(".card-expiry-month").val(),
          "card_exp_year": $(".card-expiry-year").val(),
          "card_cvv": $(".card-cvv").val(),
          "secure": $('[name=secure]')[0].checked,
          "gross_amount": $(".card-price").val()
        }
      };

      function callback(response) {
        console.log(response);
        if (response.redirect_url) {
          console.log("3D SECURE");
          // 3D Secure transaction, please open this popup
          openDialog(response.redirect_url);

        }
        else if (response.status_code == "200") {
          console.log("NOT 3-D SECURE");
          // Success 3-D Secure or success normal
          closeDialog();
          // Submit form
          $("#token_id").val(response.token_id);
          $("#payment-form").submit();
        }
        else {
          // Failed request token
          console.log(response.status_code);
          alert(response.status_message);
          $('button').removeAttr("disabled");
        }
      }

      function openDialog(url) {
        $.fancybox.open({
          href: url,
          type: "iframe",
          autoSize: false,
          width: 700,
          height: 500,
          closeBtn: false,
          modal: true
        });
      }

      function closeDialog() {
        $.fancybox.close();
      }

     	window.onload = (function (event) {
        console.log("SUBMIT");
        event.preventDefault();
        $(this).attr("disabled", "disabled");
        Veritrans.token(card, callback);
        return false;
      });
    });
  </script>
</body>

</html>