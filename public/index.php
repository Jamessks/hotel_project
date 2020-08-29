<?php include '../app/views/common/header.php'; ?>
<main class="home-main-section">
	<section>
		<img class="bg-image" src="assets/images/general/home-photo.jpg"/>
		<div class="search-content">
			<h1 class="main-query-heading">Search Hotels</h1>
			<div class="main-query-content">
			<form method="GET" action="list.php">
				<ul>
					<li class="home-query-item">
						<label class="home-query-label" for="check-in">Check-in date:</label>
						<input class="nice-input-button content-standard-1"
							  name="checkin"
							  type="text"
							  id="checkin_datepicker"
							  placeholder="mm/dd/yy"
							  readonly>
					</li>
					<li class="home-query-item">
						<label class="home-query-label" for="check-out">Check-out date:</label>
						<input class="nice-input-button content-standard-1"
							  name="checkin"
							  type="text"
							  id="checkout_datepicker"
							  placeholder="mm/dd/yy"
							  readonly>
					</li>
					<li class="home-query-item">
						<label class="home-query-label" for="city-list">City:</label>
			               <select class="nice-input-button fluid-half" id="city-list" name="city" class="home-query-select">
			                 <option value="Athens" selected>Athens</option>
			                 <option value="2">two</option>
			                 <option value="3">three</option>
			                 <option value="4">four</option>
			               </select>
					</li>
					<li class="home-query-item">
						<label class="home-query-label" for="room-list">Room Type:</label>
						<select class="nice-input-button fluid-half" id="room-list" name="roomtype" class="home-query-select">
						  <option value="1" selected>one</option>
						  <option value="2">two</option>
						  <option value="3">three</option>
						  <option value="4">four</option>
						</select>
					</li>
				</ul>
				<input class="main-query-submit" type="submit" value="Search">
			</form>
		</div>
		</div>
	</section>
</main>
<?php include '../app/views/common/footer.php'; ?>
