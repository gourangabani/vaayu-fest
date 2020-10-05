<!DOCTYPE html>
<html lang="en">

<?php
include_once './classes/department.php';
include_once './data/departments.php';
?>

<head>
	<?php include_once('./components/meta.php') ?>
	<meta name="description" content="VAAYU: a metaphor of people, a carrier of hope, a treasure of memories, a haven for magical moments, a dream lived by many. It's a rising: invincible, powerful, mystical." />
	<meta property="og:title" content="Vaayu '20 - Get Empowered!" />
	<meta property="og:description" content="VAAYU: a metaphor of people, a carrier of hope, a treasure of memories, a haven for magical moments, a dream lived by many. It's a rising: invincible, powerful, mystical." />
	<title>
		Vaayu Fest - Home
	</title>
	<?php include_once('./components/stylesheets.php') ?>
</head>

<body id="page-top">
	<?php include_once './components/navigation.php'; ?>
	<!-- masthead -->
	<header id="homeMasthead" class="customHeader text-center text-white">
		<div id="homeMastheadOverlay" class="overlay"></div>
		<video playsinline="playsinline" autoplay="autoplay" muted="muted">
			<source src="media/vaayu-reveal-2.mp4" type="video/mp4">
		</video>
		<div class="container h-100">
			<div class="d-flex h-100 text-center align-items-end">
				<div class="w-100 text-white">
					<h1 class="display-4 mb-5">
						VAAYU '20
					</h1>
				</div>
			</div>
		</div>
	</header>
	<!-- about -->
	<section id="aboutSection" class="customSection customHeader">
		<video playsinline="playsinline" autoplay="autoplay" muted="muted" lopp="loop">
			<source src="media/vaayu-clip-2.mp4" type="video/mp4">
		</video>
		<div id="aboutSectionOverlay" class="overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-1 col-md-1 col-sm-12 text-white">
						<h2 class="customSectionTitle">
							EMPOWERMENT
						</h2>
					</div>
					<div class="col-lg-5 col-md-5 col-sm-12 text-white">
						<div class="p-3">
							<p id="text">
								What was conceived out of pure passion for empowering the youth of our nation, has now transformed into
								one of India's fastest growing cultural festivals. VAAYU: a metaphor of people, a carrier of hope, a treasure of memories, a haven for magical moments, a dream lived by many.
								It's a rising: invincible, powerful, mystical.
							</p>
						</div>
						<div class="row">
							<div class="col-4 text-center">
								<div>
									<h1>
										600
									</h1>
									<h3 class="h4 mb-2">
										SOULS
									</h3>
								</div>
							</div>
							<div class="col-4 text-center">
								<div>
									<h1>
										35000
									</h1>
									<h3 class="h4 mb-2">
										PEOPLE
									</h3>
								</div>
							</div>
							<div class="col-4 text-center">
								<div>
									<h1>
										1
									</h1>
									<h3 class="h4 mb-2">
										DREAM
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- happenings -->
	<!--
	<section id="happeningsSection" class="customSection">
		<div class="container">
			<div class="row">
				<div class="col-lg-1 col-md-1 col-sm-12">
					<h2 class="customSectionTitle">
						HAPPENINGS
					</h2>
				</div>
				<div class="col-lg-11 col-md-11 col-sm-12">
					<div class="my-slider">
						<ul>
							<li>jQuery cardSlider Plugin👋</li>
							<li class="center">This is card 2</li>
							<li class="center">This is card 3</li>
							<li>This is card 4</li>
							<li>This is card 5 </li>
							<li>This is card 6 </li>
							<li> This is card 7 </li>
							<li class="center">This is the last card </li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
			</div>
		</div>
	</section>
	 -->
	<!-- gallery -->
	<section id="gallerySection" class="customSection">
		<div class="container">
			<div class="row">
				<div class="col-lg-1 col-md-1 col-sm-12">
					<h2 class="customSectionTitle">
						GALLERY
					</h2>
				</div>
				<div class="col-lg-11 col-md-11 col-sm-12">
					<div class="cont s--inactive">
						<!-- cont inner start -->
						<div class="cont__inner">
							<?php
							$albums = ['2019', '2018', '2017', '2016', '2015', 'celebrities'];
							$index = 1;
							foreach ($albums as $album) {
								echo '
								<!-- el start -->
								<div class="el">
									<div class="el__overflow">
										<div class="el__inner">
											<div class="el__bg"></div>
											<div class="el__preview-cont">
												<h2 class="el__heading">
													' . ucfirst($album) . '
												</h2>
											</div>
											<a href="gallery.php?path=' . $album . '">
												<div class="el__content">
													<div class="el__text">
														' . ucfirst($album) . '
													</div>
													<div class="el__close-btn"></div>
												</div>
											</a>
										</div>
									</div>
									<div class="el__index">
										<div class="el__index-back">
											' . ucfirst($album) . '
										</div>
									</div>
								</div>
								<!-- el end -->
                  				';
								$index += 1;
							}
							?>
						</div>
						<!-- cont inner end -->
					</div>
					<!-- 
					<a href="https://dribbble.com/shots/2802024-Satellite-Website-Prototype" target="_blank" class="icon-link">
						<img src="http://icons.iconarchive.com/icons/uiconstock/socialmedia/256/Dribbble-icon.png">
					</a>
					<a href="https://twitter.com/NikolayTalanov" target="_blank" class="icon-link icon-link--twitter">
						<img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png">
					</a>
					 -->
				</div>
			</div>
		</div>
	</section>
	<!-- events -->
	<!-- <section id="eventsSection" class="customSection">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-1 col-md-1 col-sm-12 text-white">
					<h2 class="customSectionTitle">
						EVENTS
					</h2>
				</div>
				<div class="col-lg-11 col-md-11 col-sm-12">
					<div class="item" data-hash="events-' . $department->departmentSlug . '">
						<div class="card customCard text-white">
							<img class="customCardBackground" src="media/images/events/naaz-logo.jpg" alt="' . $department->departmentName . '" />
							<div class="card-img-overlay">
								<div class="row">
									<div class="col-md-6">
										<img class="customCardImage" src="media/images/events/qadar-white-logo.png" alt="' . $department->departmentName . ' - ' . $department->departmentHeadName . '" />
									</div>
									<div class="col-md-6">
										<h4 class="card-title">
											' . $department->departmentHeadName . '
										</h4>
										<h6 class="customCardSubtitle">
											' . $departmentNamePrefix . ' ' . $department->departmentName . '
										</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7">
							<div class="owl-carousel owl-theme" id="teamCarousel">
								<?php
								foreach ($departments as $department) {
									if ($department->departmentSlug == 'financier' || $department->$departmentVertical == verticals::topFive) {
										$departmentNamePrefix = '';
									} else {
										$departmentNamePrefix = 'HoD';
									}
									echo '
									<div class="item" data-hash="team-' . $department->departmentSlug . '">
										<div class="card customCard text-white">
											<img class="customCardBackground" src="media/images/aayush-rathi.png" alt="' . $department->departmentName . '" />
											<div class="card-img-overlay">
												<img class="customCardImage" src="media/images/team-original/' . $department->departmentHeadImage . '" alt="' . $department->departmentName . ' - ' . $department->departmentHeadName . '" />
												<h4 class="card-title">
													' . $department->departmentHeadName . '
												</h4>
												<h6 class="customCardSubtitle">
													' . $departmentNamePrefix . ' ' . $department->departmentName . '
												</h6>
											</div>
										</div>
									</div>
									';
								}
								?>
							</div>
						</div>
						<div class="col-md-5">
							<div class="row">
								<div class="col-lg-12 col-md-6 col-sm-6 shadow-lg customHolder mb-1 mr-1 ml-1">
									<div class="row">
										<div class="col-md-2 customLabel">
											<h6>
												STAR
											</h6>
										</div>
										<div class="col-md-10 p-2 text-center customButtonHolder">
											<?php
											foreach ($departmentsTopFive as $department) {
												echo '
												<a class="btn customButton" href="#team-' . $department->departmentSlug . '">
													' . $department->departmentName . '
												</a>
												';
											}
											?>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-6 col-sm-6 shadow-lg customHolder m-1">
									<div class="row">
										<div class="col-md-2 customLabel">
											<h6>
												ADMIN 1
											</h6>
										</div>
										<div class="col-md-10 p-2 text-center customButtonHolder">
											<?php
											foreach ($departmentsAdminOne as $department) {
												echo '
												<a class="btn customButton" href="#team-' . $department->departmentSlug . '">
													' . $department->departmentName . '
												</a>
												';
											}
											?>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-6 col-sm-6 shadow-lg customHolder m-1">
									<div class="row">
										<div class="col-md-2 customLabel">
											<h6>
												ADMIN 2
											</h6>
										</div>
										<div class="col-md-10 p-2 text-center customButtonHolder">
											<?php
											foreach ($departmentsAdminTwo as $department) {
												echo '
												<a class="btn customButton" href="#team-' . $department->departmentSlug . '">
													' . $department->departmentName . '
												</a>
												';
											}
											?>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-6 col-sm-6 shadow-lg customHolder m-1">
									<div class="row">
										<div class="col-md-2 customLabel">
											<h6>
												EVENTS 1
											</h6>
										</div>
										<div class="col-md-10 p-2 text-center customButtonHolder">
											<?php
											foreach ($departmentsEventsOne as $department) {
												echo '
												<a class="btn customButton" href="#team-' . $department->departmentSlug . '">
													' . $department->departmentName . '
												</a>
												';
											}
											?>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-6 col-sm-6 shadow-lg customHolder m-1">
									<div class="row">
										<div class="col-md-2 customLabel">
											<h6>
												EVENTS 2
											</h6>
										</div>
										<div class="col-md-10 p-2 text-center customButtonHolder">
											<?php
											foreach ($departmentsEventsTwo as $department) {
												echo '
												<a class="btn customButton" href="#team-' . $department->departmentSlug . '">
													' . $department->departmentName . '
												</a>
												';
											}
											?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- team -->
	<section id="temporaryTeamSection" class="customSection">
		<div class="container">
			<div class="row">
				<div class="col-lg-1 col-md-1 col-sm-12">
					<h2 class="customSectionTitle">
						TEAM
					</h2>
				</div>
				<div class="col-lg-11 col-md-11 col-sm-12">
					<div class="p-5">
						<ul id="team-tab" class="nav flex-column flex-sm-row text-center customTabs">
							<li class="nav-item flex-sm-fill">
								<a id="top-5-tab" data-toggle="tab" href="#top-5" class="nav-link border-0 text-uppercase font-weight-bold active">
									<i class="fas fa-star"></i>
								</a>
							</li>
							<li class="nav-item flex-sm-fill">
								<a id="admin-1-tab" data-toggle="tab" href="#admin-1" class="nav-link border-0 text-uppercase font-weight-bold">
									Admin 1
								</a>
							</li>
							<li class="nav-item flex-sm-fill">
								<a id="admin-2-tab" data-toggle="tab" href="#admin-2" class="nav-link border-0 text-uppercase font-weight-bold">
									Admin 2
								</a>
							</li>
							<li class="nav-item flex-sm-fill">
								<a id="events-1-tab" data-toggle="tab" href="#events-1" class="nav-link border-0 text-uppercase font-weight-bold">
									Events 1
								</a>
							</li>
							<li class="nav-item flex-sm-fill">
								<a id="events-2-tab" data-toggle="tab" href="#events-2" class="nav-link border-0 text-uppercase font-weight-bold">
									Events 2
								</a>
							</li>
						</ul>
						<div id="team-tab-content" class="tab-content">
							<div id="top-5" class="tab-pane fade px-4 py-5 show active">
								<div class="row">
									<?php
									foreach ($departmentsTopFive as $department) {
										if ($department->departmentSlug == 'chairperson') {
											echo '
											<div class="col-lg-4 col-md-3"></div>
											<div class="col-lg-4 col-md-6 p-3">
												<img class="img-fluid img-profile rounded-circle mx-auto mb-2 shadow p-3" src="media/images/team-original/' . $department->departmentHeadImage . '" alt="' . $department->departmentName . ' - ' . $department->departmentHeadName . '" />
												<h4 class="name text-center text-uppercase">
													' . $department->departmentHeadName . '
												</h4>
												<h6 class="text-center text-uppercase">
													' . $department->departmentName . '
												</h6>
											</div>
											<div class="col-lg-4 col-md-3"></div>
											';
										} else {
											echo '
											<div class="col-lg-3 col-md-6 p-3">
												<img class="img-fluid img-profile rounded-circle mx-auto mb-2 shadow p-3" src="media/images/team-original/' . $department->departmentHeadImage . '" alt="' . $department->departmentName . ' - ' . $department->departmentHeadName . '" />
												<h4 class="name text-center text-uppercase">
													' . $department->departmentHeadName . '
												</h4>
												<h6 class="text-center text-uppercase">
													' . $department->departmentName . '
												</h6>
											</div>
											';
										}
									}
									?>
								</div>
							</div>
							<div id="admin-1" class="tab-pane fade px-4 py-5">
								<div class="row">
									<?php
									foreach ($departmentsAdminOne as $department) {
										if ($department->departmentSlug != 'financier') {
											echo '
											<div class="col-lg-3 col-md-6 p-3 text-center">
												<img class="img-fluid img-profile rounded-circle mx-auto mb-2 shadow p-3" src="media/images/team-original/' . $department->departmentHeadImage . '" alt="HoD ' . $department->departmentName . ' - ' . $department->departmentHeadName . '" />
												<h4 class="name text-center text-uppercase">
													' . $department->departmentHeadName . '
												</h4>
												<a class="btn btn-custom-primary w-100 text-uppercase" data-toggle="modal" href="#hod-' . $department->departmentSlug . '-modal">
													HoD ' . $department->departmentName . '
												</a>
											</div>
                                        	';
										} else {
											echo '
											<div class="col-lg-3 col-md-6 p-3 text-center">
												<img class="img-fluid img-profile rounded-circle mx-auto mb-2 shadow p-3" src="media/images/team-original/' . $department->departmentHeadImage . '" alt="' . $department->departmentName . ' - ' . $department->departmentHeadName . '" />
												<h4 class="name text-center text-uppercase">
													' . $department->departmentHeadName . '
												</h4>
												<a class="btn btn-custom-primary w-100 text-uppercase" data-toggle="modal" href="#hod-' . $department->departmentSlug . '-modal">
													' . $department->departmentName . '
												</a>
											</div>
                                        	';
										}
									}
									?>
								</div>
							</div>
							<div id="admin-2" class="tab-pane fade px-4 py-5">
								<div class="row">
									<?php
									foreach ($departmentsAdminTwo as $department) {
										echo '
										<div class="col-lg-3 col-md-6 p-3 text-center">
											<img class="img-fluid img-profile rounded-circle mx-auto mb-2 shadow p-3" src="media/images/team-original/' . $department->departmentHeadImage . '" alt="HoD ' . $department->departmentName . ' - ' . $department->departmentHeadName . '" />
											<h4 class="name text-center text-uppercase">
												' . $department->departmentHeadName . '
											</h4>
											<a class="btn btn-custom-primary w-100 text-uppercase" data-toggle="modal" href="#hod-' . $department->departmentSlug . '-modal">
												HoD ' . $department->departmentName . '
											</a>
										</div>
										';
									}
									?>
								</div>
							</div>
							<div id="events-1" class="tab-pane fade px-4 py-5">
								<div class="row">
									<?php
									foreach ($departmentsEventsOne as $department) {
										echo '
										<div class="col-lg-3 col-md-6 p-3 text-center">
											<img class="img-fluid img-profile rounded-circle mx-auto mb-2 shadow p-3" src="media/images/team-original/' . $department->departmentHeadImage . '" alt="HoD ' . $department->departmentName . ' - ' . $department->departmentHeadName . '" />
											<h4 class="name text-center text-uppercase">
												' . $department->departmentHeadName . '
											</h4>
											<a class="btn btn-custom-primary w-100 text-uppercase" data-toggle="modal" href="#hod-' . $department->departmentSlug . '-modal">
												HoD ' . $department->departmentName . '
											</a>
										</div>
										';
									}
									?>
								</div>
							</div>
							<div id="events-2" class="tab-pane fade px-4 py-5">
								<div class="row">
									<?php
									foreach ($departmentsEventsTwo as $department) {
										echo '
										<div class="col-lg-3 col-md-6 p-3 text-center">
											<img class="img-fluid img-profile rounded-circle mx-auto mb-2 shadow p-3" src="media/images/team-original/' . $department->departmentHeadImage . '" alt="HoD ' . $department->departmentName . ' - ' . $department->departmentHeadName . '" />
											<h4 class="name text-center text-uppercase">
												' . $department->departmentHeadName . '
											</h4>
											<a class="btn btn-custom-primary w-100 text-uppercase" data-toggle="modal" href="#hod-' . $department->departmentSlug . '-modal">
												HoD ' . $department->departmentName . '
											</a>
										</div>
										';
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
			</div>
		</div>
	</section>
	<?php include_once './components/footer.php'; ?>
	<?php include_once './components/scripts.php'; ?>
	<?php include_once './components/modals.php'; ?>
</body>

</html>