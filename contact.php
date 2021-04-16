<?php include 'headernew.php';?>
<div class="container">

<h1 class="title">Contact</h1>


<!-- form -->
<div class="contact">



       <div class="row">
       	
       	<div class="col-sm-12">
       	<div class="map">
		
       	<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3861.7989260388504!2d121.01989831483961!3d14.553488139832501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d14.5529271!2d121.0220416!4m5!1s0x3397c9055e50ad2b%3A0xc4615447fdca5838!2slaybare%20wax!3m2!1d14.5540492!2d121.0222611!5e0!3m2!1sen!2sph!4v1618553915838!5m2!1sen!2sph" width="100%" height="300" frameborder="0"></iframe>	
       	</div>


		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

       		<h4>Write to us</h4>
			<form action="insertcontact.php" role="form" method="POST" onSubmit="alert('Details Sent!');">
			<div class="form-group">	
			<input type="text" class="form-control" name="name" id="name" placeholder="Name" required="">
			</div>
			<div class="form-group">
			<input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required="">
			</div>
			<div class="form-group">
			<input type="phone" class="form-control" name="phone" id="phone" placeholder="Phone" required="">
			</div>
			<div class="form-group">
			<textarea class="form-control" name="message" placeholder="Message" rows="4"required=""></textarea>
			</div>
					
			
			<input type="submit" class="btn btn-default" value="Send" name="insertcontact">
			</form>
			</div>


       	</div>





       </div>
</div>
</div>
<!-- form -->

</div>
<?php include 'footer.php';?>