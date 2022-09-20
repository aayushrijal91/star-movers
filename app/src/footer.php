<footer>
	<div class="container">
		<div class="row justify-content-center justify-content-xl-between align-items-center">
			<div class="col-4 d-xl-none text-center">
				<?= renderImg("footer-logo.png", "logo") ?>
			</div>
			<div class="col-12 col-xl py-4 py-xl-0">
				<div class="row gx-2 gx-md-3 text-grey2 justify-content-center justify-content-xl-start">
					<div class="col-auto text-center">Copyright <?= date('Y') ?></div>
					<div class="col-auto">|</div>
					<div class="col-auto text-center"><?= $site ?></div>
					<div class="col-auto">|</div>
					<div class="col-auto text-center">All Rights Reserved
					</div>
				</div>
			</div>
			<div class="col-auto d-none d-xl-block">
				<?= renderImg("footer-logo.png", "logo") ?>
			</div>
			<div class="col-4 col-md-auto col-xl text-center text-lg-end">
				<a href="https://www.aiims.com.au/like-our-work/" target="_blank">
					<?= renderImg("aiims.png", "logo") ?>
				</a>
			</div>
		</div>
	</div>
</footer>
<a href="javascript:" id="return-to-top">
	<div class="d-flex justify-content-center align-items-center h-100 w-100">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#ffffff" class="bi bi-arrow-up" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
		</svg>
	</div>
</a>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8N9i5YyuTGykpTMLWFa5gNjwoWpO45j0&#038;libraries=places&#038;callback=initPlaces" async defer></script>
<script type="text/javascript" src="./assets/js/app.js?v=0.3"></script>
</body>

</html>