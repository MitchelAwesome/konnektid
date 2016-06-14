<?php 
	//insert this view
	include('snippets/header.php'); 

?>

<!-- //modals -->
<div class="knd-modal <?php echo ($_GET['demo'] == 'getbadge') ? "":"hidden"; ?>"><!--table-->
	<div class="knd-modal-holder">
		<div class="container  animated rubberBand">
			<div class="row">
				<div class="knd-modal-header col-md-6 col-md-offset-3">
				
						<span class="knd-modal-title">Skill Badge</span>
						<span class="hidden knd-modal-close knd-modal-close-btn"><i class="glyphicon glyphicon-remove"></i></span>
					
				</div>

				<div class="knd-modal-body col-md-6 col-md-offset-3">
					<div class="row">

						<div class="col-md-12 verify-tab verify-1">
							<br>
							<h2 class="text-center badge-bg-change">CONGRATULATIONS!</h2>
							<p class="text-center">You earned a new skill badge!</p>
							<br>
							<div class="text-center">
								<div style="background-image:url(<?php echo ROOT?>/images/assets/dutch.jpg); background-size:cover; background-repeat:no-repeat; width:80px; height:80px; background-position:50% 50%; border-radius:10px; display:inline-block;">
								</div>
							</div>
							<br>
							<p class="text-center">Your Teacher (Mitchel) verified that you learned the skill "Dutch"! <br> Therefore, you receive the "Dutch" Skill Badge!</p>
							<p class="text-center">The Skill badge is now visible on your profile!</p>
							
							<br>
							<div class="text-center">
								<a href="#" class="knd-modal-close verify-2 btn btn-md btn-primary btn-knd"><i class="glyphicon glyphicon-ok"></i> OK!</a>
							</div>
							<br>
						</div>

					</div>
				</div>
				<div class="col-md-6 col-md-offset-3">
					
				</div>

				
			</div>
		</div>

		
	</div>
</div>

<!-- //modals -->
<div class="knd-modal <?php echo ($_GET['demo'] == 'verifybadge') ? "":"hidden"; ?>"><!--table-->
	<div class="knd-modal-holder">
		<div class="container">
			<div class="row">
				<div class="knd-modal-header col-md-6 col-md-offset-3">
				
						<span class="knd-modal-title">Skill Badge</span>
						<span class="hidden knd-modal-close knd-modal-close-btn"><i class="glyphicon glyphicon-remove"></i></span>
					
				</div>

				<div class="knd-modal-body col-md-6 col-md-offset-3">
					<div class="row">

						<div class="col-md-12 verify-tab verify-1">
							<br>
							<h2 class="text-center">Verify learning efforts</h2>
							<br>
							<div class="text-center">
								<div style="background-image:url(<?php echo ROOT?>/images/assets/dutch.jpg); background-size:cover; background-repeat:no-repeat; width:80px; height:80px; background-position:50% 50%; border-radius:10px; display:inline-block;">
								</div>
							</div>
							<p class="text-center">Can you verify that Mitchel learned the skill "Dutch" from you?</p>
							<br>
							<br>
							<div class="text-center">
								<a href="#" class="verify-btn verify-2 btn btn-md btn-primary btn-knd"><i class="glyphicon glyphicon-ok"></i> VERIFY</a>
							</div>
						</div>

						<div class="col-md-12 verify-tab verify-3" style="display:none;">
							<div class="text-center">
								<i class="badge-bg-change glyphicon glyphicon-heart-empty" style="font-size:80px;"></i>
							</div>
							
							<h2 class="text-center">AWESOME!</h2>
							<br>
							<p class="text-center">Thanks to you Mitchel leared the skill "Dutch" and earned a new Skill Badge!</p>
							<br>
							<div class="text-center">
								<a href="#" class="knd-modal-close btn btn-md btn-primary btn-knd">Close</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-md-offset-3">
					
				</div>

				
			</div>
		</div>

		
	</div>
</div>

<!-- //modals -->
<div class="knd-modal <?php echo ($_GET['demo'] == 'teacherrating') ? "":"hidden"; ?>"><!--table-->
	<div class="knd-modal-holder">
		<div class="container">
			<div class="row">
				<div class="knd-modal-header col-md-6 col-md-offset-3">
				
						<span class="knd-modal-title">Teacher Rating</span>
						<span class="hidden knd-modal-close knd-modal-close-btn"><i class="glyphicon glyphicon-remove"></i></span>
					
				</div>

				<div class="knd-modal-body col-md-6 col-md-offset-3">
					<div class="row">

						<div class="col-md-12 verify-tab verify-1">
							<br>
							<h2 class="text-center">Was Mitchel your Teacher?</h2>
							<br>
							<p class="text-center">Can you Verify that Mitchel teached you Photoshop?</p>
							<br>
							<br>
							<div class="text-center">
								<a href="#" class="verify-btn verify-2 btn btn-md btn-primary btn-knd"><i class="glyphicon glyphicon-ok"></i> VERIFY</a>
							</div>
						</div>

						<div class="col-md-12 verify-tab verify-2" style="display:none;">
							<br>
							<h2 class="text-center">Awesome! Rate Mitchel's Teaching skills!</h2>
							<br>
							<p class="text-center">How well did Mitchel Teach you Photoshop?</p>
							<br>
							<div class="row">
								<div class="col-md-6 col-md-offset-2">
									<div style="margin-top:15px;" id="slider-range"></div>
								</div>
								<div class="col-md-2 text-center" style="vertical-align:top;">
									<span style="font-size:35px;font-weight:700;" id="slider-range-value"></span><span style="font-size:35px;font-weight:700;">/10</span>
								</div>
							</div>
							<br>	
							<p class="text-center">Your rating will be shared with the Konnektid Community!</p>
							<br>
							<br>
							<div class="text-center">
								<a href="#" class="verify-btn verify-2 btn btn-md btn-primary btn-knd"><i class="glyphicon glyphicon-star"></i> Place Rating</a>
							</div>
						</div>

						<div class="col-md-12 verify-tab verify-3" style="display:none;">
							<div class="text-center">
								<i class="badge-bg-change glyphicon glyphicon-heart-empty" style="font-size:80px;"></i>
							</div>
							
							<h2 class="text-center">You are AWESOME!</h2>
							<br>
							<p class="text-center">Thank you for your rating!</p>
							<p class="text-center">Your rating is placed on Mitchel's Profile!</p>
							<br>
							<div class="text-center">
								<a href="#" class="knd-modal-close btn btn-md btn-primary btn-knd">Close</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-md-offset-3">
					
				</div>

				
			</div>
		</div>

		
	</div>
</div>

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

				<div class="row hidden">
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
								<h2>TEACHER RATINGS</h2>
							</div>
							<div class="block-content">
								<div class="badges-list">
									<div class="row row-no-gutter">
										
										<div class="col-md-4 teacher-rating">
											
												<div class="row ">
													<div class="col-xs-12 text-center">
														AVERAGE<br>
														<span id="avg-rating" style="font-size:50px; font-weight:700;">7.5</span><br>
														4 ratings
														<br><br>
														<a href="#"><small>More Details</small></a>
													</div>
													
												</div>	
										</div>
										<div class="col-md-8 teacher-user-ratings">
											
												<div class="row">
													
													<div class="col-md-12 teacher-user-rating">
														Rated <strong><span id="your-rating">7</span></strong> by <strong>You</strong> for <strong>Photoshop</strong>
													</div>	
													<div class="col-md-12 teacher-user-rating">
														Rated <strong>9</strong> by <strong>Aschwin</strong> for <strong>PHP</strong>
													</div>
													<div class="col-md-12 teacher-user-rating">
														Rated <strong>8</strong> by <strong>Mike</strong> for <strong>PHP</strong>
													</div>		
													<div class="col-md-12 teacher-user-rating">
														Rated <strong>7</strong> by <strong>Loes</strong> for <strong>Photoshop</strong>
													</div>	
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
