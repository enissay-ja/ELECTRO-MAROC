<?php $this->view("header",$data); ?> -->
<div style="text-align: center;">
	<h1>Payment Confirmed</h1>
	
<?php

  // if(isset($_SESSION['POST_DATA'])){


  //     $total = 0;
  //     $description = "order 0";
  //     extract($_SESSION['POST_DATA']);
    
  // }
?>
	<!-- <br><br>
	 	<div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=AR43Syo2JVFyeZGMKfOgt6V0y7_d34fELYEX8GfXnn37Ws7fPp8CbQ6fSYZjM3t-14xt4xC33cupGRpO&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"<?=$description?>","amount":{"currency_code":"USD","value":<?=$total?>,"breakdown":{"item_total":{"currency_code":"USD","value":<?=$total?>},"shipping":{"currency_code":"USD","value":0},"tax_total":{"currency_code":"USD","value":0}}}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            //alert('Transaction completed by ' + details.payer.name.given_name + '!');
            window.location.href = '<?=ROOT."checkout/thank_you?mode=approved"?>';
          });
        },

        onCancel: function(data) {
          window.location.href = '<?=ROOT."checkout/thank_you?mode=cancel"?>';
        },

        onError: function(err) {
          window.location.href = '<?=ROOT."checkout/thank_you?mode=error"?>';
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script> -->

<br><br>
</div>

<?php $this->view("header",$data); ?>
<div style="text-align: center;">
 
	<?php if(isset($_GET['mode']) && $_GET['mode'] == 'approved'):?>
		<h1>Thank you for shopping with us!</h1>
		<h4>Your order was successful</h4>
		<br><br>

	<?php elseif(isset($_GET['mode']) && $_GET['mode'] == 'cancel'):?>

		<center><h1>Payment was cancelled!</h1></center>
	<?php elseif(isset($_GET['mode']) && $_GET['mode'] == 'error'):?>
		
		<center><h1>An error occured! Payment unsuccessful!</h1></center>
	<?php else:?>
		<center><h1>Sorry, An error occured!</h1></center>
	<?php endif;?>

		<div>What would you like to do next?</div><br>
	<a href="<?=ROOT?>shop">
		<input type="button" class="btn btn-warning" value="Continue shopping">
	</a>
	<a href="<?=ROOT?>profile">
		<input type="button" class="btn btn-warning" value="View your orders">
	</a>
		
		<br><br>

</div>
<?php $this->view("footer",$data); ?>