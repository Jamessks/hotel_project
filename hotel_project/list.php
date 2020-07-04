<?php include 'views/common/header.php'; ?>
<div class="list-page-wrapper">
	<aside id="sidebar-search-results">
		<div class="sidebar-details-panel">
			<div class="sidebar-details-heading">
				<h2>find the perfect hotel</h2>
			</div>
			<form method="get" action="">
				<ul class="sidebar-details-list">
					<li class="sidebar-details-item">
						<select class="nice-input-button fluid-full">
							<option value="null" selected>Count of guests</option>
							<option value="hurr">Durr</option>
						</select>
					</li>
					<li class="sidebar-details-item">
						<select class="nice-input-button fluid-full">
							<option value="null" selected>Room Type</option>
							<option value="hurr">Durr</option>
						</select>
					</li>
					<li class="sidebar-details-item">
						<select class="nice-input-button fluid-full">
							<option value="null" selected>City</option>
							<option value="hurr">Durr</option>
						</select>
					</li>
				</ul>
				<div class="sidebar-price-wrapper text-centered bottom-spacing-1">
					<p class="bottom-spacing-1">
						<label class="content-standard-1" for="amount">Price range:</label>
						<input class="content-standard-1 price-range" type="text" id="amount" readonly>
					</p>
					<div id="slider-range"></div>
				</div>
				<ul class="sidebar-dates">
					<li>
						<label class="content-standard-1" for="check-in">Check-in date:</label>
						<input class="nice-input-button content-standard-1" type="date" name="checkin" value="">
					</li>
					<li>
						<label class="content-standard-1" for="check-out">Check-out date:</label>
						<input class="nice-input-button content-standard-1" type="date" name="checkout" value="">
					</li>
				</ul>
				<div class="submit-button-container">
					<input class="submit-button transition-fade-in-vquick" type="submit" value="Search">
				</div>
			</form>
		</div>
	</aside>
	<main id="main-search-results">
		<div class="search-results-wrapper">
			<div class="search-results-heading">
				<h1>
					Search Results
				</h1>
			</div>
			<article>
				<div class="search-results-body">
					<div class="search-results-room-image">
						<img src="assets/images/rooms/room-1.jpg" alt="Room photo">
					</div>
					<div class="search-results-first-wrapper">
						<div class="search-results-hotel-title">
							<h2>Vretania hotel</h2>
						</div>
						<div class="search-results-hotel-place">
							<h3>Athens, Syntagma</h3>
						</div>

						<div class="search-results-room-description">
							<p>lorem ipsum blabla blu lorem ipsum blabla lorem ipsum blabla blu lorem ipsum blabla lorem ipsum blabla blu lorem ipsum blablalorem ipsum blabla blu lorem ipsum blablalorem ipsum blabla blu lorem ipsum blabla</p>
						</div>
						<div class="search-visit-button">
							<a class="font-fat transition-fade-in-vquick" type="button" name="button">Visit Room Page</a>
						</div>
					</div>
					<div class="room-characteristics">
						<ul class="room-characteristics-list">
							<li class="room-characteristics-list-item">
								<div class="room-characteristics-indication">
									<span><i class="fa fa-users"></i> | 1</span>
								</div>
								<div class="room-characteristics-indication-desc">
									<p>COUNT OF GUESTS</p>
								</div>
							</li>
							<li class="room-characteristics-list-item">
								<div class="room-characteristics-indication">
									<span><i class="fa fa-bed"></i> | 2+</span>
								</div>
								<div class="room-characteristics-indication-desc">
									<p>TYPE OF ROOM</p>
								</div>
							</li>
							<li class="room-characteristics-list-item">
								<div class="room-characteristics-indication">
									<span>Per Night</span>
								</div>
								<div class="room-characteristics-indication-desc">
									<p>350$</p>
								</div>
							</li>
						</ul>
					</div>
					</div>
				</article>
				<article>
					<div class="search-results-body">
						<div class="search-results-room-image">
							<img src="assets/images/rooms/room-2.jpg" alt="Room photo">
						</div>
						<div class="search-results-first-wrapper">
							<div class="search-results-hotel-title">
								<h2>Vretania hotel</h2>
							</div>
							<div class="search-results-hotel-place">
								<h3>Athens, Syntagma</h3>
							</div>

							<div class="search-results-room-description">
								<p>lorem ipsum blabla blu lorem ipsum blabla lorem ipsum blabla blu lorem ipsum blabla lorem ipsum blabla blu lorem ipsum blablalorem ipsum blabla blu lorem ipsum blablalorem ipsum blabla blu lorem ipsum blabla</p>
							</div>
							<div class="search-visit-button">
								<a class="font-fat transition-fade-in-vquick" type="button" name="button">Visit Room Page</a>
							</div>
						</div>
						<div class="room-characteristics">
							<ul class="room-characteristics-list">
								<li class="room-characteristics-list-item">
									<div class="room-characteristics-indication">
										<span><i class="fa fa-users"></i> | 1</span>
									</div>
									<div class="room-characteristics-indication-desc">
										<p>COUNT OF GUESTS</p>
									</div>
								</li>
								<li class="room-characteristics-list-item">
									<div class="room-characteristics-indication">
										<span><i class="fa fa-bed"></i> | 2+</span>
									</div>
									<div class="room-characteristics-indication-desc">
										<p>TYPE OF ROOM</p>
									</div>
								</li>
								<li class="room-characteristics-list-item">
									<div class="room-characteristics-indication">
										<span>Per Night</span>
									</div>
									<div class="room-characteristics-indication-desc">
										<p>350$</p>
									</div>
								</li>
							</ul>
						</div>
						</div>
					</article>
					<article>
						<div class="search-results-body">
							<div class="search-results-room-image">
								<img src="assets/images/rooms/room-3.jpg" alt="Room photo">
							</div>
							<div class="search-results-first-wrapper">
								<div class="search-results-hotel-title">
									<h2>Vretania hotel</h2>
								</div>
								<div class="search-results-hotel-place">
									<h3>Athens, Syntagma</h3>
								</div>

								<div class="search-results-room-description">
									<p>blabla blu lorem ipsum blabla</p>
								</div>
								<div class="search-visit-button">
									<a class="font-fat transition-fade-in-vquick" type="button" name="button">Visit Room Page</a>
								</div>
							</div>
							<div class="room-characteristics">
								<ul class="room-characteristics-list">
									<li class="room-characteristics-list-item">
										<div class="room-characteristics-indication">
											<span><i class="fa fa-users"></i> | 1</span>
										</div>
										<div class="room-characteristics-indication-desc">
											<p>COUNT OF GUESTS</p>
										</div>
									</li>
									<li class="room-characteristics-list-item">
										<div class="room-characteristics-indication">
											<span><i class="fa fa-bed"></i> | 2+</span>
										</div>
										<div class="room-characteristics-indication-desc">
											<p>TYPE OF ROOM</p>
										</div>
									</li>
									<li class="room-characteristics-list-item">
										<div class="room-characteristics-indication">
											<span>Per Night</span>
										</div>
										<div class="room-characteristics-indication-desc">
											<p>350$</p>
										</div>
									</li>
								</ul>
							</div>
							</div>
						</article>
						<article>
							<div class="search-results-body">
								<div class="search-results-room-image">
									<img src="assets/images/rooms/room-4.jpg" alt="Room photo">
								</div>
								<div class="search-results-first-wrapper">
									<div class="search-results-hotel-title">
										<h2>Vretania hotel</h2>
									</div>
									<div class="search-results-hotel-place">
										<h3>Athens, Syntagma</h3>
									</div>

									<div class="search-results-room-description">
										<p>lorem ipsum blabla blu lorem ipsum blabla lorem ipsum blabla blu lorem ipsum blabla lorem ipsum blabla blu lorem ipsum blablalorem ipsum blabla blu lorem ipsum blablalorem ipsum blabla blu lorem ipsum blabla</p>
									</div>
									<div class="search-visit-button">
										<a class="font-fat transition-fade-in-vquick" type="button" name="button">Visit Room Page</a>
									</div>
								</div>
								<div class="room-characteristics">
									<ul class="room-characteristics-list">
										<li class="room-characteristics-list-item">
											<div class="room-characteristics-indication">
												<span><i class="fa fa-users"></i> | 1</span>
											</div>
											<div class="room-characteristics-indication-desc">
												<p>COUNT OF GUESTS</p>
											</div>
										</li>
										<li class="room-characteristics-list-item">
											<div class="room-characteristics-indication">
												<span><i class="fa fa-bed"></i> | 2+</span>
											</div>
											<div class="room-characteristics-indication-desc">
												<p>TYPE OF ROOM</p>
											</div>
										</li>
										<li class="room-characteristics-list-item">
											<div class="room-characteristics-indication">
												<span>Per Night</span>
											</div>
											<div class="room-characteristics-indication-desc">
												<p>350$</p>
											</div>
										</li>
									</ul>
								</div>
								</div>
							</article>
						</div>
					</main>
				</div>
				<?php include 'views/common/footer.php'; ?>
