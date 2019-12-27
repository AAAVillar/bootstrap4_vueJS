<!DOCTYPE html>
<html lang="en">
<head>
	<?php require('metaScriptsLinks.php'); ?>
	<title>workin it</title>
</head>
<!--  comments   -->
<body>
	<div id="vueApp">
		
		<?php include ('navBarTop.php');  ?>
		<!--  nav Bar fixed at the top  -->

		<?php include ('jumbotron_1.php');  ?>
		<!-- jumbotron -->
		
		<div class="container" >
			<div class="row">

				<div id="image_1" class="col-sm-4">
					<h2 class="text-center">{{name_1}}</h2>
					<h5>Photo of {{name_1}}:</h5>
					<img src="images/one.png" alt="pretty lady" class="img-fluid my-border" title="one.png">
					
					<h4>{{image_1_text}}</h4>
				</div>  <!--  id="image_1" class="col-sm-4"  -->



				<div class="col-sm-8">
					<div id="image_2">
						<h2 class="text-center">{{name_2}}</h2>
						<h5>Title description, Dec 7, 2017</h5>
						<img src="images/two.png" alt="pretty lady" class="img-fluid my-border" title="two.png">
						<p>Some text..</p>
					</div>  <!-- /#image_2 -->

					<div id="image_3" class="col-sm-12">
						<h2 class="text-center">{{name_3}}</h2>
						<h5>Title description, Sep 2, 2017</h5>
						<img src="images/three.png" alt="pretty lady" class="img-fluid  justify-content-center my-border" title="three.png">
						<p>Some text..</p>
					</div>  <!-- /#image_3 -->

				</div>  <!-- class="col-sm-8" -->
			</div>  <!-- class="row" -->
		</div>  <!-- class="container" -->

		
		<?php include ('form.php');  ?>
		<!-- form #1 -->
		
		<?php include ('footer.php');  ?>
		<!-- footer -->


	</div>  <!-- /#vueApp -->	
	<script src="app.js"></script>
	<script src = "main.js"></script>
</body>
</html>