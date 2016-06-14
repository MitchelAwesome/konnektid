<?php 
	//insert this view
	include('snippets/header.php'); 

?>
<!--start page-->
<div class="page-main">
	<div class="hidden-xs hidden-sm" style="background:url(<?php echo ROOT.'/images/assets/banner.jpg';?>) 50% 50% transparent; background-size:cover; height: 330px; margin-top: -40px;     position: relative;">
		<div style="background-color: #3fa285; opacity: .8;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: -100px;">
				<div class="block">
					<div class="block-header" style="border-bottom:0;">
						<h2 style="color:#B594C4;">What do you want to learn?</h2>
					</div>
					<div class="block-inner">
						<input class="learn-input" type="text" placeholder="e.g. Cooking, Spanish or Guitar...">
					</div>
					<br>
					<br>
					<br>
					<br>
					<div class="block-inner block-upper text-right">
						<a href="#" class="btn btn-md btn-knd">NEXT</a>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-md-offset-2">
				<div class="block">
					<div class="block-header">
						<h2>IN MY NEIGHBORHOOD</h2>
					</div>
					<div class="block-content">
						<div class="knd-list">
							<?php //for($i=0; $i<10; $i++):?>

							<!--can teach you-->
							<div class="knd-list-item">
								<div class="row">
									<div class="col-xs-4 col-md-2">
										<div class="knd-user-img" style="background-image:url(<?php echo ROOT?>/images/users/avatar3.png);">
											
										</div>
									</div>
									<div class="col-xs-8 col-md-10">
										<div class="knd-user-title">
											<strong>Xavier</strong> <span>can teach you</span>
										</div>
										<div class="knd-user-skill">
											DUTCH
										</div>
										
									</div>
								</div>
							
								<div class="row knd-button-group">
									<div class="hidden-xs col-md-2">&nbsp;</div>
									<div class="col-xs-12 col-md-10">
										<a href="#" class="btn btn-md btn-primary btn-knd">LEARN</a>
									</div>
								</div>
							</div>

							<!--WANTS TO LEARN-->
							<div class="knd-list-item">
								<div class="row">
									<div class="col-xs-4 col-md-2">
										<div class="knd-user-img" style="background-image:url(<?php echo ROOT?>/images/users/avatar3.png);">
											
										</div>
									</div>
									<div class="col-xs-8 col-md-10">
										<div class="knd-user-title">
											<strong>Jacqueline</strong> <span> wants to learn</span>
										</div>
										<div class="knd-user-skill">
											PORTUGESE
										</div>
									</div>
								</div>
							
								<div class="row knd-button-group">
									<div class="hidden-xs col-md-2">&nbsp;</div>
									<div class="col-xs-12 col-md-10">
										<a href="#" class="btn btn-md btn-primary btn-knd">YES, TEACH</a>
										<a href="#" class="btn btn-md btn-primary btn-knd-notnow">NOT NOW</a>
										<a href="#" class="btn btn-md btn-primary btn-knd-no">NO</a>
									</div>
								</div>
							</div>
							
							<!--JUST JOINED-->
							<div class="knd-list-item">
								<div class="row">
									<div class="col-xs-4 col-md-2">
										<div class="knd-user-img" style="background-image:url(<?php echo ROOT?>/images/users/avatar3.png);">
											
										</div>
									</div>
									<div class="col-xs-8 col-md-10">
										<div class="knd-user-title">
											<strong>Jacqueline</strong> <span>joined Konnektid</span>
										</div>
										<div class="knd-user-joined">
											&lt;1 km from you
										</div>
										
									</div>
								</div>

							</div>




							<?php //endfor; ?>
						</div><!-- // knd-list-->

					</div>				
				</div>
			</div>
		</div>
	</div>

</div>
<!--page-->
<?php include('snippets/footer.php');  ?>
