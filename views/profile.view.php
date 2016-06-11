<?php 
	//insert this view
	include('snippets/header.php'); 

?>
<!--start page-->
<div class="page-main">

	<!-- PROFILE INFO-->
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<div class="block block-inner block-upper">
					<div class="row">
						
						
						<div class="col-xs-12 col-md-2">
							<div class="knd-user-img" style="width:150px; height:150px; background-image:url(<?php echo ROOT?>/images/users/avatar.jpg); background-size:cover; background-position:50% 50%; border-radius:50%;">
								
							</div>
						</div>
						<div class="col-xs-12 col-md-5 text-xs-center">
							<h2>Mitchel Austin</h2>
							<span><i class="glyphicon glyphicon-map-marker"></i> Amsterdam</span>
						</div>
						<div class="col-xs-12 col-md-5">
							<div class="row text-right" style="position:relative; min-height:150px;">
								<div style="position:absolute; bottom:0px; right:0px; display:block;">
								<div class="col-xs-4 text-center">
									konnektions<br>
									<strong>4</strong>
								</div>
								<div class="col-xs-4 text-center">
									requested<br>
									<strong>4</strong>
								</div>
								<div class="col-xs-4 text-center">
									offered<br>
									<strong>4</strong>
								</div>
								</div>

							</div>
						</div>
					</div>

					
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<!--LEFT LAYOUT-->
			<div class="col-md-6">

				<!-- SKILL PROGRESS-->
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<div class="block-header">
								<h2>2 SKILLS TO TEACH</h2>
							</div>
							<div class="block-content">	
			
								<div class="knd-list">
									<?php //for($i=0; $i<10; $i++):?>

									<div class="skill-list-item">
										<div class="row">
											<div class="col-xs-12 col-md-3">
												<div class="skill-img" style="background-image:url(<?php echo ROOT?>/images/assets/spanish.jpg);">
													
												</div>
											</div>
											<div class="col-xs-12 col-md-9">
												<div class="skill-title">
													Spanish
												</div>
												<div class="skill-progress">
													<div class="row">
														<div class="col-md-5">
															0% Complete
														</div>
															<div class="col-md-7">
																<div class="progress">
															  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
															    <span class="sr-only">0% Complete</span>
															  </div>
															</div>
														</div>
														
													</div>
													
												</div>
											</div>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-12 skill-goals-title">
														<h2>Mitchel's Goals:</h2>
													</div>
													
												</div>

												<div class="row knd-button-group">
													<div class="col-xs-12 col-md-6">
														Looking for a partner to teach me conversational spanish :).
													</div>
													<div class="col-xs-12 col-md-6 text-right">
														<a href="#" class="btn btn-md btn-primary btn-knd">TEACH :)</a>
													</div>
												</div>
											</div>

										</div>
									</div>

									<div class="skill-list-item">
										<div class="row">
											<div class="col-xs-12 col-md-3">
												<div class="skill-img" style="background-image:url(<?php echo ROOT?>/images/assets/dslr.png);">
													
												</div>
											</div>
											<div class="col-xs-12 col-md-9">
												<div class="skill-title">
													PHOTOGRAPHY
												</div>
												<div class="skill-progress">
													<div class="row">
														<div class="col-md-5">
															50% Complete
														</div>
															<div class="col-md-7">
																<div class="progress">
															  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;">
															    <span class="sr-only">50% Complete</span>
															  </div>
															</div>
														</div>
														
													</div>
													
												</div>
											</div>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-12 skill-goals-title">
														<h2>Mitchel's Goals:</h2>
													</div>
													
												</div>

												<div class="row knd-button-group">
													<div class="col-xs-12 col-md-6">
														Making a Timelapse (video)
													</div>
													<div class="col-xs-12 col-md-6 text-right">
														<a href="#" class="btn btn-md btn-primary btn-knd">TEACH :)</a>
													</div>
												</div>
												<div class="row knd-button-group">
													<div class="col-xs-12 col-md-6">
														Making pictures in dark areas (Disco, Party, etc)
													</div>
													<div class="col-xs-12 col-md-6 text-right">
														<a href="#" class="btn btn-md btn-primary btn-knd btn-knd-notnow"><i class="glyphicon glyphicon-ok"></i> COMPLETED</a>
													</div>
												</div>

											</div>

										</div>
									</div>
									<!--can teach you-->
									<div class="skill-list-item hidden">
										<div class="row">
											<div class="col-xs-12 col-md-3">
												<div class="skill-img" style="background-image:url(<?php echo ROOT?>/images/assets/android.jpg);">
													
												</div>
											</div>
											<div class="col-xs-12 col-md-9">
												<div class="skill-title">
													ANDROID
												</div>
												<div class="skill-progress">
													<div class="row">
														<div class="col-md-5">
															33% Complete
														</div>
															<div class="col-md-7">
																<div class="progress">
															  <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width:33%;">
															    <span class="sr-only">60% Complete</span>
															  </div>
															</div>
														</div>
														
													</div>
													
												</div>

												
											</div>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-12 skill-goals-title">
														<h2>Mitchel's Goals:</h2>
													</div>
													
												</div>

												<div class="row knd-button-group">
													<div class="col-xs-12 col-md-6">
														Using an API to drive my app
													</div>
													<div class="col-xs-12 col-md-6 text-right">
														<a href="#" class="btn btn-md btn-primary btn-knd">TEACH</a>
													</div>
												</div>

												<div class="row knd-button-group">
													<div class="col-xs-12 col-md-6">
														Make a login form for my app
													</div>
													<div class="col-xs-12 col-md-6 text-right">
														<a href="#" class="btn btn-md btn-primary btn-knd">TEACH</a>
													</div>
												</div>
												<div class="row knd-button-group">
													<div class="col-xs-12 col-md-6">
														Make Basic App
													</div>
													<div class="col-xs-12 col-md-6 text-right">
														<a href="#" class="btn btn-md btn-primary btn-knd btn-knd-notnow"><i class="glyphicon glyphicon-ok"></i> COMPLETED</a>
													</div>
												</div>

											</div>
										</div>
									</div>

								</div>				
							</div>


						</div>	
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<div class="block-header">
								<h2>9 skills to teach</h2>
							</div>
							<div class="block-content">
								<div class="knd-list">
									<?php //for($i=0; $i<10; $i++):?>

									<!--can teach you-->
									<div class="knd-list-item">
										<div class="row">
											<div class="col-xs-4 col-md-2">
												<div class="knd-user-img" style="background-image:url(<?php echo ROOT?>/images/users/avatar.jpg);">
													
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

									<?php //endfor; ?>
								</div><!-- // knd-list-->

							</div>				
						</div>
					</div>
				</div>

			</div>

			<!--RIGHT LAYOUT-->
			<div class="col-md-6">

				<!-- CAN TEACH YOU -->
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<div class="block-header">
								<h2>Mitchel can teach you</h2>
							</div>
							<div class="block-content">
								<div class="badges-list">
									<div class="row row-no-gutter">
										
										<div class="col-md-6 badge-list-item">
											
												<div class="row ">
													<div class="col-xs-5">
														<div class="" style="background-image:url(<?php echo ROOT?>/images/assets/photoshop.png); background-size:cover; background-repeat:no-repeat; width:80px; height:80px; background-position:50% 50%; border-radius:10px;">
														</div>
													</div>
													<div class="col-xs-7">
														<h2 class="text-left" style="height:80px; line-height:80px;">Photoshop</h2>
													</div>
													<div class="col-xs-6 text-center hidden">
														<div class="badge-item-status status-complete">
															8.0 Teacher rating
														</div>
													</div>
													<div class="col-xs-12 text-center">
														<div class="badge-item-status status-complete">
															<a href="" class="btn btn-md btn-primary btn-knd" style="">Learn This Skill</a>
														</div>	
													</div>							
												</div>	
										</div>
										<div class="col-md-6 badge-list-item">
											
												<div class="row ">
													<div class="col-xs-5">
														<div class="" style="background-image:url(<?php echo ROOT?>/images/assets/php.jpg); background-size:cover; background-repeat:no-repeat; width:80px; height:80px; background-position:50% 50%; border-radius:10px;">
														</div>
													</div>
													<div class="col-xs-7">
														<h2 class="text-left" style="height:80px; line-height:80px;">PHP</h2>
													</div>
													<div class="col-xs-12 text-center">
														<div class="badge-item-status status-complete">
															<a href="" class="btn btn-md btn-primary btn-knd" style="">Learn This Skill</a>
														</div>	
													</div>									
												</div>	
										</div>
									</div>
								</div>			
			
							</div>


						</div>	


					</div>
				</div>

				<!-- Teacher SCORE -->
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<div class="block-header">
								<h2>TEACHER Rating</h2>
							</div>
							<div class="block-content">
								<div class="badges-list">
									<div class="row row-no-gutter">
										
										<div class="col-md-4 teacher-rating">
											
												<div class="row ">
													<div class="col-xs-12 text-center">
														AVERAGE<br>
														<span style="font-size:50px; font-weight:700;">7.5</span><br>
														4 ratings
														<br><br>
														<a href="#"><small>More Details</small></a>
													</div>
													
												</div>	
										</div>
										<div class="col-md-8 teacher-user-ratings">
											
												<div class="row">
													<?php for ($i=0; $i < 4; $i++): ?>
													<div class="col-md-12 teacher-user-rating">
														<strong>7.5</strong> rating by Loes for <strong>Photoshop</strong>
													</div>	
													<?php endfor; ?>				
												</div>	
										</div>
									</div>
								</div>			
			
							</div>


						</div>	


					</div>
				</div>	

				<!-- COMPLETED SKILLS -->
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<div class="block-header">
								<h2>2 skills COMPLETED</h2>
							</div>
							<div class="block-content">
								<div class="badges-list">
									<div class="row row-no-gutter">
										
										<div class="col-md-6 badge-list-item">
											
												<div class="row ">
													<div class="col-xs-5">
														<div class="" style="background-image:url(<?php echo ROOT?>/images/assets/dutch.jpg); background-size:cover; background-repeat:no-repeat; width:80px; height:80px; background-position:50% 50%; border-radius:10px;">
														</div>
													</div>
													<div class="col-xs-7">
														<h2 class="text-left" style="height:80px; line-height:80px;">DUTCH</h2>
													</div>
													<div class="col-xs-12 text-center">
														<div class="badge-item-status status-complete">
															<h2><i class="glyphicon glyphicon-ok"></i> COMPLETED</h2>
														</div>
													</div>								
												</div>	
										</div>
										<div class="col-md-6 badge-list-item">
											
												<div class="row ">
													<div class="col-xs-5">
														<div class="" style="background-image:url(<?php echo ROOT?>/images/assets/ai.jpg); background-size:cover; background-repeat:no-repeat; width:80px; height:80px; background-position:50% 50%; border-radius:10px;">
														</div>
													</div>
													<div class="col-xs-7">
														<h2 class="text-left" style="height:80px; line-height:80px;">Illustrator</h2>
													</div>
													<div class="col-xs-12 text-center">
														<div class="badge-item-status status-complete">
															<h2><i class="glyphicon glyphicon-ok"></i> COMPLETED</h2>
														</div>
													</div>								
												</div>	
										</div>
									</div>
								</div>			
			
							</div>


						</div>	


					</div>
				</div>


			</div>
		</div>

	</div>
<!--page-->
<?php include('snippets/footer.php');  ?>
