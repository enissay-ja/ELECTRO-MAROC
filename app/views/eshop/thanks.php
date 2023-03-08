<?php $this->view("header",$data); ?>

<?php $this->view("slider",$data); ?>

	<section>
		<div class="container">
			<div class="row">
				<?php if(isset($_GET['mode']) && $_GET['mode'] == 'approved'):?>

	 				<center><h1>Thanks for shopping with us!</h1></center>
	 			<?php elseif(isset($_GET['mode']) && $_GET['mode'] == 'cancel'):?>

	 				<center><h1>Payment was cancelled!</h1></center>
	 			<?php elseif(isset($_GET['mode']) && $_GET['mode'] == 'error'):?>
	 				
	 				<center><h1>An error occured! Payment unsuccessful!</h1></center>
	 			<?php endif;?>
			</div>
		</div>
	</section>
	
<?php $this->view("footer",$data); ?>

