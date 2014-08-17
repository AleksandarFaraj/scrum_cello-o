<?php 
include('partials/header.php'); 
include('partials/mail.php'); 
?>

	<section class="main container">
		<div class="row">
			<div class="container">
				<h1>Mail</h1>
			</div>
			<div class="col-lg-6">
				<form role="form" method="post">
				
				<div class="form-group">
					<label for="sender">Från</label>
						<input name="sender" type="text" class="form-control"/> 
				</div>
			
				<div class="form-group">
					<label for="subject">Titel</label>
						<input name="subject" type="text" class="form-control"/> 
				</div>
				
				<div class="form-group ">
					<label for="message">Meddelande</label>
						<textarea name="message" class="form-control" ></textarea>
				</div>
				
				
				<input type="submit" />
				</form>
				
			</div>
				
		</div>
		
	</section>
<?php include('partials/footer.php'); ?>