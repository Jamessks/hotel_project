<?php include 'views/common/header.php'; ?>
<div class="list-page-wrapper-single">
	<main>
		<section>
			<div class="room-basic-info">
				<div class="room-heading  bottom-spacing-1">
					<ul class="room-list">
						<li>Hotel Name - City, Town</li>
						<li>Rating</li>
						<li>Favorite</li>
						<li>Per Night: $</li>
					</ul>
				</div>
				<div class="bottom-spacing-1">
					<img class="room-photo" src="<?=img_room?>room-1.jpg" alt="Room photo">
				</div>
				<div class="room-characteristics">
					<ul class="room-characteristics-list">
						<li class="room-characteristics-list-item">
							<div class="room-characteristics-indication">
								<span><i class="fa fa-users"></i> | 5</span>
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
								<span><i class="fa fa-car"></i> | 1</span>
							</div>
							<div class="room-characteristics-indication-desc">
								<p>PARKING</p>
							</div>
						</li>
						<li class="room-characteristics-list-item">
							<div class="room-characteristics-indication">
								<span><i class="fa fa-signal"></i> | Yes</span>
							</div>
							<div class="room-characteristics-indication-desc">
								<p>WIFI</p>
							</div>
						</li>
						<li class="room-characteristics-list-item">
							<div class="room-characteristics-indication">
								<span class="divider"><i class="fa fa-paw"></i> | No</span>
							</div>
							<span class="divider"></span>
							<div class="room-characteristics-indication-desc">
								<p>PET FRIENDLY</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="left_border-inclined-red top-bottom-spacing-1">
			<div class="card-heading font-fat">
				<h2>Room Description:</h2>
			</div>
			<div class="card-content font-read">
				<p>
					Lorem Ipsum blablabla...Lorem Ipsum blablabla...Lorem Ipsum blablabla...
					Lorem Ipsum blablabla...Lorem Ipsum blablabla...Lorem Ipsum blablabla...
					Lorem Ipsum blablabla...Lorem Ipsum blablabla...Lorem Ipsum blablabla...
					Lorem Ipsum blablabla...Lorem Ipsum blablabla...Lorem Ipsum blablabla...
					Lorem Ipsum blablabla...Lorem Ipsum blablabla...
				</p>
			</div>
		</section>
		<section>
			<div class="room-geolocation-frame">
				<iframe src="" width="" height="">GoogleAPI geolocation</iframe>
			</div>
		</section>
		<section class="left_border-inclined-red top-bottom-spacing-1">
			<div class="card-heading font-fat bottom-spacing-1">
				<h2>Reviews</h2>
			</div>
			<div class="font-fat bottom-spacing-1">
				<p>Username <span>5 Stars</span></p>
			</div>
			<div class="font-slim bottom-spacing-1">
				Posted on: 6/6/2020
			</div>
			<div class="font-read bottom-spacing-1">
				<p>review bla bla bla...</p>
			</div>
		</section>
		<section class="left_border-inclined-red top-bottom-spacing-3">
			<div class="font-fat">
				<h3>Add Review</h3>
			</div>
			<form action="" method="POST">
				<div class="add_review-pane-rating">
					<div id="review-add-rate">
						5 stars
					</div>
				</div>
				<div class="add_review-review bottom-spacing-2">
					<textarea class="fluid-full" name="add_review" style="resize: none; min-height: 90px;" placeholder="Review here">
					</textarea>
				</div>
				<input class="button-type-1" type="button" name="review_submit" value="Submit">
			</form>
		</section>
	</main>
</div>
<?php include 'views/common/footer.php'; ?>
